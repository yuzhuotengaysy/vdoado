var adoPath = '/vdoado/vdoado/Public/audio/';
var vdoPath = '/vdoado/vdoado/Public/video/';
var ajaxPath4Media = 'test.php'; //insert ajaxUrl for media here
var ajaxPath4Check = 'check.php'; //insert ajaxUrl for check here 
var adoRcr = 0;

//vars for ajaxQuery
var audios = [];
var adoDropd = [];
var video = '';
$(document).ready(function() {
    init(); //initial page
});

function loadSrc() {
    for (var i in audios) { //create audio players
    	var j = parseInt(i)+1;
        $('.drag').append('<div id="' + i + '" class="text-center ado">' + j +'<i class="glyphicon glyphicon-play"></i>' + '<a>x</a></div>')
    }
    $('.vdoPlayer').attr({ //setup video player
        src: vdoPath + video
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
                src: adoPath + audios[i]
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
        url: ajaxPath4Media, //like this {"video":"filename1", "audios":["filename2","filename3","filename4"]}
        type: 'POST',
        dataType: 'json'
    })
    .done(function(data) { //get sources
        video = data['video'];
        audios = data['audios'];
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
		        $('.vdoPlayer')[0].play();																			//load vdoPlayer

		        adoRcr = 0;
		        if($ado.length){																					//if has dropd
			        for (var i = 0; i < $ado.length; i++) {
			            adoDropd[i] = parseInt($ado.eq(i).attr('id'));
			        }

			        $('#'+adoDropd[adoRcr]).children('i').removeClass('glyphicon-play').addClass('glyphicon-stop');     //play first 
			        $('.adoPlayer').attr({
			            src: adoPath + audios[adoDropd[adoRcr++]]
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
			                    src: adoPath + audios[adoDropd[adoRcr++]]
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
    	adoDropd = [];
    	for (var i = 0; i < $('.drop>.ado').length; i++) {
		    adoDropd[i] = parseInt($('.drop>.ado').eq(i).attr('id'));
		}
    	$.ajax({
    		url: ajaxPath4Check,
    		type: 'POST',
    		data: {adoDropd: adoDropd},
    	})
    	.done(function() {
    		console.log("success");
    	})
    	.fail(function() {
    		console.log("error");
    	})
    	.always(function() {
    		console.log("complete");
    	});
    	
    })
}