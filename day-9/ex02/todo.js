var idx = 0;
let newcookie;
function createCookie(value){
	if (!newcookie){
		document.cookie = 'list=' + value;
	}
	newcookie += document.cookie;
	document.cookie = 'list=' + newcookie;
}

function addItem(){
	let toDo = prompt("Please enter a to do item");
	if (toDo.length){
		createCookie(toDo)
		const li = document.createElement("li");
		const txt = document.createTextNode(toDo);
		li.appendChild(txt);
		const div = document.createElement("DIV");
		div.setAttribute('id', idx);
		div.setAttribute('onclick', 'removeItem(this.id)');
		div.appendChild(li);
		const list = document.getElementById("ft_list");
		list.insertBefore(div, list.children[0]);
		idx++;
		//append adds at the end of the list
		// document.getElementById("ft_list").appendChild(div);
	}
}

function removeItem(clicked_id){
	if (confirm("Confirm to remove the \"TO DO item?\"")){
		element = document.getElementById(clicked_id);
		element.remove();
	}
}