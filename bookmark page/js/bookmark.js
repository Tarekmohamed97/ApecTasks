const Names[];
localStorage.setItem('Names',JSON.stringify('Names'));
const x = JSON.parse(localStorage.getItem('Names'));
//****************to store the names************//
const websiteName= {
  name : ''
};
//*******************************************************//
const renderNotes  = function (input,filters) {
    const filteredNotes = input.filter(function (element) {
   return element.Name.toLowerCase().includes(websiteName.name.toLowerCase());
  } );
//**************to validate the URL************//
 function validate() {
        var url = document.getElementById("url").value;
        var pattern = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        if (pattern.test(url)) {
           let uniqueId = uuidv4();
                Names.push({
                Name : websitename.name,
                id : uniqueId
                });     
        }
            alert("Url is not valid!");
             renderNotes(Names,websiteName);
            return false;
    }
    renderNotes(Names,websiteName);
   //**********************************************//

  
    
    
    document.getElementbyId('website').addEventListener('input' , function(e) {
  websitename.name = e.target.value;
  renderNotes(Names,websitename);
    
    document.getElementById('submit-button').addEventListener('click' , function(e) {
    validate();
    renderNotes(Names,websitename);