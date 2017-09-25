<?php
namespace Home\Model;
use Think\Model;
class BookingModel extends Model {

    public function getBookingData($year, $month)
    {
        $month_last_day = date('d', strtotime("+1 month -1 day", strtotime(date('Ym').'01')));
        $day = date('d')+C('PREV_DAYS');
        $ym = $year.(strlen($month)==1?'0'.$month:$month);
        $ymd = $ym.(strlen($day)==1?'0'.$day:$day);
        $result = array();
        $result['day'] = date("d");
        $w = date('w', strtotime($ym.'01'))==0 ? 7 : date('w', strtotime($ym.'01'));
        $n=1;
        if($w>1){
            for ($i=1; $i<$w ; $i++) { 
                $result['date'][$n][$i] = 0;
            } 
        }
        if($day>$month_last_day){
            for($i=1; $i<=$month_last_day; $i++){
                $n = ceil(($i+$w-1)/7);
                $k = ($i+$w-1)%7;
                $result['date'][$n][$k]['day'] = $i;
                $result['date'][$n][$k]['num'] = 0;
            }
        }else{
            $where = "ymd like '{$ym}%' and ymd >= {$ymd} and ablenum>0";
            $data = M("Booking")->where($where)->select();
            if($data){
                $datas = [];
                foreach ($data as $k => $v) {
                    $datas[$v['ymd']] = $v['ablenum'];
                }
            }
            for($i=1; $i<=$month_last_day; $i++){
                $n = ceil(($i+$w-1)/7);
                $k = ($i+$w-1)%7 ==0 ? 7 : ($i+$w-1)%7;
                $key = $ym.(strlen($i)==1?'0'.$i:$i);
                $result['date'][$n][$k]['day'] = $i;
                $result['date'][$n][$k]['num'] = $i>=$day && isset($datas[$key]) ? $datas[$key] : 0;
            }
        }
        $result['len'] = $n;
        return $result;
    }

    public function add($year, $month, $day)
    {
        $booking = M("Booking");
        $bookingRecord = M("BookingRecord");
        $time = time();
        $user = session('user');
        $ymd = $year.(strlen($month)==1?'0'.$month:$month).(strlen($day)==1?'0'.$day:$day);
        $where = array(
            'ymd' => ['eq', $ymd],
            'ablenum' => ['gt', 0]
            );
        $record = $booking->where($where)->find();
        $map = array(
            'ymd' => $ymd, 
            'patientid' => $user['id'],
            'status' => 1
            );
        $exit = $bookingRecord->where($map)->find();
        if($exit){
            return array('code'=>-1, 'msg'=>'不能重复预约！');
        }else{
            $trans = M();
            $trans->startTrans();
            $r1 = $booking->where(array('id'=>$record['id']))->save(array('ablenum'=>$record['ablenum']-1, 'utime'=>$time));
            $data = array(
                'ymd' => $ymd, 
                'patientid' => $user['id'],
                'ctime' => $time,
                'utime' => $time,
                );
            $r2 = $bookingRecord->add($map);
            if($r1 && $r2){
                $trans->commit();
                return array('code'=>0, 'msg'=>'预约成功！');
            }else{
                $trans->rollback();
                return array('code'=>-1, 'msg'=>'预约失败！');
            }
        }
    }

    public function getList($p, $ps){
        $map = array('patientid' => 1);
        // $pageSize = C("BOOK_LIST_SIZE");
        $data = M("BookingRecord")->where($map)->order("id desc")->limit($ps*($p-1), $ps)->select();
        return $data;
    }
}
