function allowDrop(ev)
{
ev.preventDefault();
}
 
function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);

}
 
function drop(ev)
{

	
var data = ev.dataTransfer.getData("Text");
console.log(data);
ev.target.appendChild(document.getElementById(data));
ev.preventDefault();

var a = document.getElementById(data);
console.log(a);


}