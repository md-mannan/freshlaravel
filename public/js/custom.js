 function clearAll(){
    var name=document.getElementById('name').value;
    var username=document.getElementById('username').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone').value;

return name,username,email,phone="";
    
}

function sendData(){
    var name=document.getElementById('name').value;
    var username=document.getElementById('username').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone').value;


    var url='/insert';

    var data={
        name:name,
        username:username,
        email:email,
        phone:phone
    }


    axios.post(url,data)
    .then(function(response){
         alert(response.data);
    })
    .catch(function(error){
        alert(error);
    })
}

function UpdateData(){
    var name=document.getElementById('name').value;
    var username=document.getElementById('username').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone').value;
    var id=document.getElementById('id').value;


    var url='/updatedata';

    var data={
        id:id,
        name:name,
        username:username,
        email:email,
        phone:phone
        
    }


    axios.post(url,data)
    .then(function(response){
         alert(response.data);
    })
    .catch(function(error){
        alert(error);
    })
}


function deleteData(){
    var id=document.getElementById('id').value;


    var url='/deletedata';

    var data={
        id:id
        
    }


    axios.post(url,data)
    .then(function(response){
         alert(response.data);
    })
    .catch(function(error){
        alert(error);
    })
}