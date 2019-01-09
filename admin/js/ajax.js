function fetch_img (imgObj){
    fetch("request.php",
  {
   method: 'POST',
    body : imgObj
  }
).then(res => res.blob())
                      .then(data =>  {
                        console.log(data)
                      } )
}

function fetch_form_data (form_data){
    fetch("request.php",
  {
   method: 'POST',
   headers: {
     'Accept': 'application/json',
     'Content-Type': 'application/json'
   },
    body : form_data
  }
).then(res => res.json())
                      .then(data =>  {
                        console.log(data)
                      } )
}