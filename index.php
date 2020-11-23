<!DOCTYPE html>
<html>
<style>
  .thumbnail:hover {
    position:relative;
    top:-25px;
    left:-35px;
    width:500px;
    height:auto;
    display:block;
    z-index:999;
}
  body {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: sans-serif;
  background-color: #EA6583;
  opacity: 1;
  transition: 0.3s;
}

body:hover {
  background-color: pink;
  color: white;
  z-index:999;
  }

  * {
    box-sizing: border-box;
    margin: auto;

  }
  h1 {
    text-align: center;
    color: #F39E4D;
  }
  .outer-grid {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
  }
  .inner-grid {
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
  }
  .inner-grid img {
    margin-top: 8px;
    width: 100%;
    padding: 10px;

  }
  @media screen and (max-width: 600px) {
    .inner-grid {
      flex: 100%;
      max-width: 100%;

    }
    p {
      margin: 5px 0;
      padding: 0;
      text-align: center;
      font-style: normal;
    }
  }
</style>
<body>
  <h1> Responsive Image Grid Example</h1>
  <div class="outer-grid">
  <div class="inner-grid">
    <h3>Elementary Years</h3>
    <img src="https://i.postimg.cc/0yF1QBJj/125904815-373719863845666-6974801785615809383-n.jpg" class="thumbnail"/>
    <p>"Me with my childhood friend,Kim. I was in grade 1 and she was in kinder."</p>
    <img src="https://i.postimg.cc/QM1wMx3Y/125982981-227986422087727-5628366657645352339-n.jpg" class="thumbnail"/>
    <p>"Naks! Hehehe "</p>
    <img src="https://i.postimg.cc/v83jTNJy/126157169-1084287235344404-1813351456206780759-n.jpg" class="thumbnail"/>
    <p>"Got it from my Momma!"</p>
  </div>
  <div class="inner-grid">
    <h3>High School Years</h3>
    <img src="https://i.postimg.cc/3wYCgKGc/hs1.jpg" class="thumbnail"/>
    <p>"Solid friendship since High School!"</p>
     <img src="https://i.postimg.cc/9F9GK4tk/hs2.jpg" class="thumbnail"/>
    <p>"Me and Kat --my partner in crime."</p>
   <img src="https://i.postimg.cc/3wYCgKGc/hs1.jpg" class="thumbnail"/>
    <p>"I'm so happy today!"</p>
    <img src="https://i.postimg.cc/CxJ620tB/hs7.jpg" class="thumbnail"/>
    <p>"Can you guess how young we were here?LOL"</p>
  </div>
  <div class="inner-grid">
    <h3>College Years</h3>
    <img src="https://i.postimg.cc/zGyCF1nF/college5.jpg" class="thumbnail"/>
    <p>"Don't worry, it's our vacant period.Hehehe."</p>
    <img src="https://i.postimg.cc/DZ7w7wDn/college6.jpg" class="thumbnail"/>
    <p>"With some of the IT peepz in our favorite tambayan."</p>
    <img src="https://i.postimg.cc/DZmjRqgG/college2.jpg" class="thumbnail"/>
    <p>"I guess this was during a symposium."</p>
    <img src="https://i.postimg.cc/d0V4T8gf/college4.jpg" class="thumbnail"/>
    <p>"Group picture inside a studio was really "a thing" before. LOL.</p>
  </div>
  </div>
</div>
</body>
</html>

