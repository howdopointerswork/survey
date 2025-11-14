var script = document.createElement('script');


script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js";
script.type = "text/javascript";

let page = 0;

function loadButtons(){

	if(page == 0){
	for(let i=0; i<17; ++i){

			const button = document.createElement("button");
			button.id = "button" + i;
			button.textContent = i+1;
			//button.style.fontSize = "11px";
			//button.style.margin = "2em";

			
			document.getElementById('buttons').appendChild(button);
			document.getElementById('button'+i).addEventListener('click', () => {
				
				console.log("page: " + page);
				
				$('#'+page.toString()).css('display', 'none');
				
				page = i;


				
				$('#'+page.toString()).css('display', '');
				
				$('#current').html((page+1).toString());
				
				if(page > 0){

					$('#prev').css('visibility', 'visible');
				}

				if(page == 16){

					$('#next').css('visibility', 'hidden');
					
					$('#submit').css('display', '');
				}
				if(page == 0){

					$('#prev').css('visibility', 'hidden');
				}

				if(page < 16){

					$('#next').css('visibility', 'visible');
					$('#submit').css('display', 'none');
				}
			
				/*if(page==17){

					$('#submit').css()	
				}*/
			});
			
			
		}
	}
}




script.onload = function(){

	loadButtons();
	
	//console.log("loaded");
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
				
				$('#prev').css('visibility', 'visible');
				$('#next').css('visibility', 'hidden');
				$('#submit').css('display', '');

			}

			$('#'+(page-1).toString()).css('display', 'none');
			$('#'+page.toString()).css('display', '');
			loadButtons();

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

			if(page == 15){
	
				$('#next').css('visibility', '');
				$('#submit').css('display', 'none');

			}

			$('#'+(page+1).toString()).css('display', 'none');
			$('#'+page.toString()).css('display', '');
			

		});

		


	});


};


document.head.appendChild(script);
