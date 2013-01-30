function showHide(id1, id2)
{
	var element1 = document.getElementById(id1);
	var element2 = document.getElementById(id2);
	if(element1.style.display == 'block')
	{
		element1.style.display = 'none';
		element2.style.display = 'block';
	}
	else
	{
		element1.style.display = 'block';
		element2.style.display = 'none';
	}
}

function confirmDelete()
{
	if(confirm('Esta seguro que quiere eliminar este registro'))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function validSelects(select)
{
	var valid = true;
	if(document.getElementById(select).value == 0)
	{
		document.getElementById(select).className = 'selectError';
		valid = false;
	}
	return valid;
}

function validPasswords(pass1, pass2)
{
	var txt1 = document.getElementById(pass1);
	var txt2 = document.getElementById(pass2);
	
	if(txt1.value != txt2.value)
	{
		txt2.className = 'selectError';
		return false;
	}
}