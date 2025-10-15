var script = document.createElement('script');


script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js";
script.type = "text/javascript";

let page = 0;

script.onload = function(){
	
	console.log("loaded");
	$(document).ready(function(){



		$('#next').click(function(){

			++page;
			console.log(page);
			$('html, body').animate({ scrollTop: 0 }, 'slow');
			$('#current').html((page+1).toString());

			if(page > 0){

				$('#prev').css('visibility', 'visible');
				$('#header').html('Student Interest Survey: Clubs & Groups');
			}
			
			
			if(page == 16){

				//$('#prev').css('visibility', 'hidden');
				$('#next').css('visibility', 'hidden');
				$('#submit').css('display', '');

			}

			$('#'+(page-1).toString()).css('display', 'none');
			$('#'+page.toString()).css('display', '');

			//account for last page, make next invisible
			//and show submit

		});

		$('#prev').click(function(){

			--page;
			console.log(page);
			$('html, body').animate({ scrollTop: 0 }, 'slow');
			$('#current').html((page+1).toString());

			if(page == 0){

				$('#prev').css('visibility', 'hidden');
				$('#header').html('Petition To Expand Shuttle Bus Service to KPU Richmond Campus');

			}

			$('#'+(page+1).toString()).css('display', 'none');
			$('#'+page.toString()).css('display', '');

		});

		


	});


};


document.head.appendChild(script);
