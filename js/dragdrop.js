var counts = { dragend : 1};

function allowDrop(ev)
{
ev.preventDefault();
}
 
function dragEnter(ev){
	ev.target.style.border="2px dashed #0000FF";
	
	//return true;
}

function dragLeave(ev){
	ev.target.style.border ="none";
}

function drag(ev)
{
ev.dataTransfer.effectsAllowed = "move";
ev.dataTransfer.setData("dragId",ev.target.id);


ev.target.style.border = "1px solid #0000FF";

}
 
// function over(ev){
// 	var dragId = e.dataTransfer.getData("dragId");

// }

function dragEnd(ev){
	document.getElementById("end").innerHTML = counts.dragend++;
	ev.target.style.border="none";
	ev.dataTransfer.clearData("dragId");
}

function drop(ev)
{
ev.target.style.border="none";	
var data = ev.dataTransfer.getData("dragId");
console.log(data);
ev.target.appendChild(document.getElementById(data));

var a = document.getElementById(data);
console.log(a);


ev.preventDefault();
}


function pontos(){
	// var score = document.getElementById("pontos");
	// score.innerHTML = 0;

	var score = document.querySelector("#pontos");
	score.value = 0;

	var hitboxes = document.getElementById("dropzone").children;
	//console.log(hitboxes);

	 for(var i = 0;i < hitboxes.length;i++){
	 	var hitbox = hitboxes[i];
	 	var dropzone = hitbox.lastElementChild;
	 	//console.log(dropzone);

		if (dropzone.children.length > 0) {
	 		dropzone.style.backgroundSize = "0";

	 		var dropzoneId = dropzone.id;
	 		var iconId = dropzone.firstElementChild.id;

	 		var dropzoneName = dropzoneId.substring(dropzoneId.indexOf('-') + 1);
	 		var iconName = iconId.substring(iconId.indexOf('-') + 1);

	 		//dropzone.previousElementSibling.setAttribute('class', 'answer show');


	 		if(iconName == dropzoneName) {
				
	 			//score.innerHTML = parseInt(score.innerHTML) + 1;
	 			score.value = parseInt(score.value) +1;
	 			
	 			if(score.value > 4){
	 				var status = "Aluno sabe ler";
	 				
	 				console.log(status);
	 				//console.log("Aqui");
	 			}
	 		}else{
	 			console.log("Errou!");
	 				}
		}

	 }//for
}//function

setInterval(pontos,10);


// var botaoSalvar = document.querySelector("#bntForm");
// botaoSalvar.addEventListener("click",function(event){
// 	event.preventDefault();
// })
