function showpost(){
var iDiv = document.createElement('div');
iDiv.id = 'new_post';
iDiv.className = 'row';
document.getElementsByTagName('body')[0].appendChild(iDiv);

// Now create and append to iDiv
var innerDiv = document.createElement('div');
innerDiv.className = 'col s10';

// The variable iDiv is still good... Just append to it.
iDiv.appendChild(innerDiv);

innerDiv.innerHTML="basyxdgqwkwjd";
}
