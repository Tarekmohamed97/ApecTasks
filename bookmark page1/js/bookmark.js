//Array of objects//
const Names = [];


const remove = function(id){
 const index = Names.findIndex((Name)=> {
    return Name.id == id;
  });
 if (index > -1) {
    Names.splice(index,1);
  }
};

//**************to validate the URL************//
function validate() {
        var url = document.getElementById("url").value;
        var pattern = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        if (pattern.test(url)) {
           return true;               
        }
            alert("Url is not valid!");
             bookmarks(Names);
            return false;
    }
   //**********************************************//
   console.log('helloooo');
   document.getElementById('saving').innerHTML = '';
  function bookmarks(input){
   let Button1 = document.createElement('button');
    Button1.innerHTML = 'visit';
    let Button2 = document.createElement('button');
    Button2.innerHTML = 'Delete';
   let showIt = document.createElement('p');
    showIt.textContent = input.name;
    document.getElementById('saving').appendChild(showIt);
   showIt.appendChild(Button1);
  showIt.appendChild(Button2);
  //****************delete a Name**************//
  Button2.addEventListener('click' , function () {
      remove(Name.id);
      bookmarks(Names);
    });
  //**********************************************//
 }
  
    
   document.getElementById('website').addEventListener('input' , function (e) {
    name = e.target.value;
       });
   document.getElementById('url').addEventListener('input' , function(e) {
      url = e.target.value;
       });
   //*********to push the site's name to the array of objects****// 
    document.getElementById('submit-button').addEventListener('click' , function() {
          let uniqueId = uuidv4();
     Names.push({
       name ,
       id : uniqueId
     });
         bookmarks(Names);
       });
    //*********************************************************//
       