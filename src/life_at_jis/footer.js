const nav = document.querySelector('.footerr')
fetch('/footer.html')
.then(res=>res.text())
.then(data=>{
  nav.innerHTML=data
})