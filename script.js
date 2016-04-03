var myPage = {
    h1Text: 'Roman Moisiuk',
    profilePicture: 'Pictures/profile_pic.jpg',
    pictureUrl: 'imeges\file.jpg',
    address: 'Alexandria, VA USA',
    phone:'571-505-9830',
    article:"Bacon ipsum dolor amet pork chop filet mignon tongue pork pork belly\
    picanha short ribs t-bone salami strip steak. Ground round\
     filet mignon pastrami landjaeger rump shank. Jowl turducken\
      fatback tenderloin. Turkey corned beef kielbasa pork belly.\
     Picanha boudin venison short ribs pancetta pork chop sausage turkey.\
    Spare ribs jerky beef ribs pig pancetta cupim, short loin tenderloin\
    tri-tip rkas. Leberkas hamburger filet mignon pancetta, ham chicken\
    beef ribs venison. Fatback kevin rump beef ribs meatloaf, corned beef\
    bresaola strip steak tongue porchetta beef pork chop leberkas.",

    setTitle: function(b) {
        this.h1Text = b;
    },
    setLink1Url: function(xd) {
      this.myNav.link1.url = xd;
    },
    getTitle: function() {
        return this.title;
    }
};

var d = document;

var h1 = d.getElementsByTagName('h1')[0];
//myPage.setTitle('Hello');
h1.innerHTML = myPage.h1Text;

var profilePicture = d.getElementById('profile_pic');
profilePicture.src = myPage.profilePicture;

var profileAddress = d.getElementById('address');
profileAddress.innerHTML = myPage.address;

var profilePhone = d.getElementById('phone');
profilePhone.innerHTML = myPage.phone;

//var article = d.getElementsByClassName('article')[0];
//var p = d.createElement('P');
//p.innerHTML = myPage.article;

//article.appendChild(p);


//task_2

var comment = d.getElementById('send_btn');
//console.log(comment);
comment.addEventListener('click', addComment);
var text_area = d.getElementById('text_area');
var comment_list = d.getElementById('commentList');
var UserNameField = d.getElementById("UserName");
/*
*   добавляем коммент
*/
function addComment(){

    if(validate() && checkEmail() && checkUserName()){
        // добавление коммента
        var new_comment_data = text_area.value;
        text_area.value = null;
        var p_comment = d.createElement('P');
        p_comment.innerHTML = new_comment_data;
        comment_list.appendChild(p_comment);

        // добавление имени
        p_comment = d.createElement('P');
        p_comment.innerHTML = UserNameField.value;
        comment_list.appendChild(p_comment);
        UserNameField.value = null;
        // добавление линии
        var hr = d.createElement('HR');
        comment_list.appendChild(hr);

    }
    else {
      alert('Fill the fields');}
}

var UserNameField = d.getElementById('UserName');


// валидация заполненного комента

function validate() {
    var textarea = document.getElementById('text_area');
    var validated = false;
    if(textarea.value !== ''){
        validated = true;
    }
    return validated;
}

// валидация имейла
function checkEmail(){
    var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
    var emailField = document.getElementById('Email');
    var result = emailField.value.match(validEmail);
    emailField.value = null;
    if (result != null) {
        return true;
    }
    return false;
}

// валидация имени

function checkUserName(){
  var result = UserNameField.value;
  if (result !=='') {
    return true;
  }
  return false;

}
