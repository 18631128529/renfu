<?php
namespace Home\Model;
use Think\Model;
class PatientModel extends Model {
    /**
     * 登录校验
     * @param $account
     * @param $pwd
     * @return bool
     */
    public function checkLogin($account, $pwd)
    {
        $map = array(
            'account' => $account,
            'pwd'     =>  md5(C('PASS_SALT').$pwd),
            'status'  => 1,
            );
        $user = M("Patient")->where($map)->find();
        if($user){
            session('user',$user);
            return array('code'=>0, 'data'=>'/message/index');
        }else{
            return array('code'=>-1, 'msg'=>'账号信息不正确！');
        }
    }

    public function changePwd($oldPwd, $newPwd)
    {
        $user = session('user');
        if(md5(C('PASS_SALT').$oldPwd)==$user['pwd']){
            $newPwd = md5(C('PASS_SALT').$newPwd);
            $data = array('pwd'=>$newPwd, 'utime'=>time());
            $map = array('id'=>$user['id']);
            $result = M('Patient')->where($map)->save($data);
            if($result!==false){
                $user['pwd'] = $newPwd;
                session('user', $user);
                return array('code'=>0, 'msg'=>'密码修改成功！', 'data'=>'/patient/index');
            }
            return array('code'=>-1, 'msg'=>'密码修改失败！');
        }
        return array('code'=>-1, 'msg'=>'原密码不正确！');
    }

}
