var idx = 0;

if (document.cookie && document.cookie != ""){
	var Arr = document.cookie.split(';');
	for (var k = 0; k < Arr.length; k++){
		var values = Arr[k].split("=");
		listing(values[1], k);
	}
	idx = k;
}

function listing(textValue, ix){
	var dv = document.createElement("DIV");
	dv.setAttribute('id', ix);
	dv.setAttribute('onclick', 'removeItem(this.id)');
	var tx = document.createTextNode(textValue);
	var ls = document.createElement("li");
	ls.appendChild(tx);
	dv.appendChild(ls);
	var ftList = document.getElementById("ft_list");
	ftList.insertBefore(dv, ftList.children[0]);
}

function addItem(){
	let toDo = prompt("Please enter a to do item");
	if (toDo != null){
		if (toDo.length){
			listing(toDo, idx);
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