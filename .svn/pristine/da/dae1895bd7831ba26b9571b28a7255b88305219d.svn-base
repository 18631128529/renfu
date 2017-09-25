$(function(){
	//创建MeScroll对象,内部已默认开启下拉刷新,自动执行up.callback,重置列表数据;
	var mescroll = new MeScroll("mescroll", {
		down:{use: false},
		up: {
			auto:true,
			// clearEmptyId: "dataList", //1.下拉刷新时会自动先清空此列表,再加入数据; 2.无任何数据时会在此列表自动提示空
			callback: getListData, //上拉回调,此处可简写; 相当于 callback: function (page) { getListData(page); }

		}
	});
	// var mescroll = initMeScroll("mescroll", {
	// 	up: {
	// 		// auto:true,//初始化完毕,是否自动触发上拉加载的回调
	// 		callback: getListData, //上拉加载的回调
	// 	}
	// });
	function getListData(page){
		console.log(page);
		$.get('/patient/blist', {p:page.num, ps:page.size}, function(response){
			var len = response.length;
			mescroll.endSuccess(len);
			for (var i = 0; i < len; i++) {
				var pd=response[i];
				var html = '<li><p class="btime">时间：<span class="blicont">' +pd.ymd+ '</span></p>' +
	                '<p class="bstatus">状态：<span class="blicont">' +pd.status+ '</span>' +
	                '</p>' +
	                '<p class="brmbtn">取消</p>' +
	                '<p class="bctime">' +pd.ctime+ '</p></li>';
				$("#dataList").append(html);
			}
		}, 'json')
	}
	
	
	
});


