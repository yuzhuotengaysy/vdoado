
var ajaxPath4Media; //insert ajaxUrl for media here
var ajaxPath4Check; //insert ajaxUrl for check here 
var testId;
var adoRcr = 0;

//vars for ajaxQuery
var audios = [];
var adoNames = [];
var adoDropd = [];
var video = '';

function getPath(a4m,a4c,id){
    ajaxPath4Media = a4m; //insert ajaxUrl for media here
    ajaxPath4Check = a4c; //insert ajaxUrl for check here 
    testId = id;
    init();
    
}
function loadSrc() {
    for (var i in audios) {     //构建音频方块
    	var j = parseInt(i)+1;
        $('.drag').append('<div id="' + j + '" class="text-center ado">' + adoNames[i] +'<i class="glyphicon glyphicon-play"></i>' + '<a>x</a></div>')
    }
    $('.vdoPlayer').attr({ //setup video player
        src: video
    });
    $('.ado>a').hide().click(function(){
        $(this).hide().parent().appendTo('.drag');
    });
    $('.ado') //setup audios
        .hover(function() {
            $(this).children('i').toggleClass('glyphicon-play').toggleClass('glyphicon-stop');
        })
        .hover(function() {
            var i = $(this).attr('id');
            $('.adoPlayer').attr({
                src: audios[i-1]
            });
            $('.adoPlayer')[0].play();
        }, function() {
            $('.adoPlayer')[0].pause();
        })
        .draggable({
            
            revert: "invalid",
            connectToSortable: ".drop"
        });
       
}

function init() {
    $.ajax({ //request an json object 
        url: ajaxPath4Media, //like this {"video":"file1Path", "audios":["filen2Path","filen3Path","file4Path"]}
        type: 'POST',
        data: {
            id: testId
        },
        dataType: 'json'
    })
    .done(function(data) { //get sources
        video = data['video'];                      //视频源 是字符串
        audios = data['audios'];                    //音频源 是数组
        adoNames = data['adoNames'];
        loadSrc();
        console.log("success");
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });



    $('.drop')
	    .sortable({
	        revert: true
	    })
	    .droppable({
	        accept: '.ado',
	        drop: function(e, ui) {
	            ui.draggable.appendTo(this).children('a').show();
	        }
	    });


    $('.test')
    	.click(function() {
    		var $ado = $('.drop>.ado');
    		if(!$(this).hasClass('testPlay')){																		//if paused,play it
                $('.vdoPlayer')[0].currentTime = 0; 
		        $('.vdoPlayer')[0].play();																			//load vdoPlayer

		        adoRcr = 0;
		        if($ado.length){																					//if has dropd
			        for (var i = 0; i < $ado.length; i++) {
			            adoDropd[i] = parseInt($ado.eq(i).attr('id'));
			        }

			        $('#'+adoDropd[adoRcr]).children('i').removeClass('glyphicon-play').addClass('glyphicon-stop');     //play first 
			        $('.adoPlayer').attr({
			            src:  audios[adoDropd[adoRcr++]]
			        })[0].play();


			        $('.adoPlayer')[0].onended = function() {													//play next
			            if (adoRcr >= adoDropd.length) {														//dropd ado ended
		    				$ado.last().children('i').addClass('glyphicon-play').removeClass('glyphicon-stop');
		    				$('.vdoPlayer')[0].pause();
		    				$('.vdoPlayer')[0].currentTime = 0;
					    	$('.adoPlayer')[0].pause();
					    	$('.adoPlayer')[0].onended = null;
					    	$('.test').removeClass('testPlay');
			            } else {																				//dropd ado playing
							$('#'+adoDropd[adoRcr-1]).children('i').addClass('glyphicon-play').removeClass('glyphicon-stop');
			        		$('#'+adoDropd[adoRcr]).children('i').removeClass('glyphicon-play').addClass('glyphicon-stop');
			                $(this).attr({
			                    src: audios[adoDropd[adoRcr++]]
			                })[0].play();
			            }
			        };
			    }
	    		$(this).addClass('testPlay').text('停止');
		    }
		    else{																									//if playing,pause it
		    	$('#'+adoDropd[adoRcr-1]).children('i').addClass('glyphicon-play').removeClass('glyphicon-stop');
		    	$('.vdoPlayer')[0].pause();
		    	$('.vdoPlayer')[0].currentTime = 0;
		    	$('.adoPlayer')[0].pause();
		    	$('.adoPlayer')[0].onended = null;
		    	$(this).removeClass('testPlay').text('试听');
		    }
	    });

    $('.submit').click(function() {
    	var adoDropd = [];
    	for (var i = 0; i < $('.drop>.ado').length; i++) {
		    adoDropd[i] = parseInt($('.drop>.ado').eq(i).attr('id'));
		}
        if(adoDropd.length){
            do{
                var name = prompt('请输入你的姓名:');
            }while(name == "")
        	$.ajax({
        		url: ajaxPath4Check,
        		type: 'POST',
        		data: {
                    adoDropd: adoDropd,                 //音频
                    name:name,                           //姓名
                    id:parseInt(testId)
                },
                dataType:'json'
        	})
        	.done(function() {
                alert('提交成功');
                window.location.href = "about:blank"; 
        		console.log("success");
        	})
        	.fail(function() {
        		console.log("error");
        	})
        	.always(function() {
        		console.log("complete");
        	});
    	}
        else{
            alert('您还没有选择音频');
        }
    })
}