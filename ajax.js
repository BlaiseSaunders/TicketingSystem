/*window.addEventListener('popstate', function(event)
{
	// The popstate event is fired each time when the current history entry changes.


	print_dir(window.cur_dir+"/..");

	//history.back();
	//history.pushState(null, null, window.location.pathname);

}, false);*/


function print_tickets()
{
	var big_boy = document.getElementById('big_boy_container');

	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "get_tickets.php", true);
	xhttp.onreadystatechange = function()
	{
    		if (xhttp.readyState == 4 && xhttp.status == 200)
    		{
    			console.log(xhttp.responseText);
				big_boy.innerHTML = xhttp.responseText;
    		}
    	}

	xhttp.send();

}


/*document.addEventListener('keydown', function(event)
{
	if (event.keyCode == 78) // 'n'
		new_ticket();
}
);*/

function new_ticket()
{
	console.log("ayylmao");
	var big_boy = document.getElementById('big_boy_container');

	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "new_ticket.php", true);
	xhttp.onreadystatechange = function()
	{
    		if (xhttp.readyState == 4 && xhttp.status == 200)
    		{
    			console.log(xhttp.responseText);
				big_boy.innerHTML = xhttp.responseText;
    		}
    	}

	xhttp.send();

}


function view_ticket(id)
{
	var big_boy = document.getElementById('big_boy_container');

	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "view_ticket.php?id=" + id, true);
	xhttp.onreadystatechange = function()
	{
		console.log("Serving up ticket: " + id);
    		if (xhttp.readyState == 4 && xhttp.status == 200)
    		{
    			console.log(xhttp.responseText);
				big_boy.innerHTML = xhttp.responseText;
    		}
    	}

	xhttp.send();
}

function update_ticket(id)
{
	var big_boy = document.getElementById('big_boy_container');

	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "edit_ticket.php?id=" + id, true);
	xhttp.onreadystatechange = function()
	{
		console.log("Serving up ticket editor for: " + id);
    		if (xhttp.readyState == 4 && xhttp.status == 200)
    		{
    			console.log(xhttp.responseText);
				big_boy.innerHTML = xhttp.responseText;
    		}
    	}

	xhttp.send();
}

function close_ticket(id)
{
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "close_ticket.php?id=" + id, false); // Make request synchronous (the false)
	xhttp.send();

	print_tickets();

}


