function login(){
	$.get('/login', { id: id }).then(function(response) {
    console.log(response);
  });
}   