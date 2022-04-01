var idx = 0;
console.log(document.cookie);
if (document.cookie && document.cookie != ""){
	var Arr = document.cookie.split(';');
	for (var k = 0; k < Arr.length; k++){
		var values = Arr[k].split("=");
		var dv = document.createElement("DIV");
		dv.setAttribute('id', k);
		dv.setAttribute('onclick', 'removeItem(this.id)');
		var tx = document.createTextNode(values[1]);
		var ls = document.createElement("li");
		ls.appendChild(tx);
		dv.appendChild(ls);
		var ftList = document.getElementById("ft_list");
		ftList.insertBefore(dv, ftList.children[0]);
	}
	idx = k;
}

function addItem(){
	console.log(idx);
	let toDo = prompt("Please enter a to do item");
	if (toDo != null){
		if (toDo.length){
			const li = document.createElement("li");
			const txt = document.createTextNode(toDo);
			li.appendChild(txt);
			const div = document.createElement("DIV");
			div.setAttribute('id', idx);
			div.setAttribute('onclick', 'removeItem(this.id)');
			div.appendChild(li);
			const list = document.getElementById("ft_list");
			list.insertBefore(div, list.children[0]);
			var nwCookie = idx + "=" + toDo + 
			"; expires=Thu, 18 Dec 2050 12:00:00 UTC; secure; path=/;";
			idx++;
			document.cookie = nwCookie;
		}
	}
}

function removeItem(clicked_id){
	if (confirm("Confirm to remove the \"TO DO item?\"")){
		element = document.getElementById(clicked_id);
		element.remove();
		document.cookie = clicked_id + 
		"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
		console.log(document.cookie);
	}
}