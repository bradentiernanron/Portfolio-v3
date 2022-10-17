@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap');

body {
  margin:0px;
  /*font-family: 'Raleway', sans-serif;*/
  font-family: 'Inter', sans-serif;
  background-color:rgb(216, 166, 159);
  overflow-x:hidden;
  -webkit-overflow-x:hidden;
  -moz-overflow-x:hidden;
  -o-overflow-x:hidden;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), linear-gradient(292.31deg, #0A84FF 0%, #D8A69F 100%);
  color:white;
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}

h1 {
  font-size:28px;
  line-height:35px;
  margin:1rem 1.5rem;
}

h2 {
  font-size:28px;
  line-height:35px;
  margin:1rem 1.5rem;
}

p {
  font-size:16px;
  line-height:20px;
  margin:1rem 2rem;
}

a {
  color:inherit;
  text-decoration:none;
}

div {
  position:relative;
}

section {
  position:relative;
}

.animate {
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}

.index_s3s2 {
  margin:20px;
  border:2px white solid;
  border-radius:40px;
  height:400px;
}

.index_s3s1s1 {
  position:relative;
  margin:20px;
  margin-top:40px;
  text-align:center;
  font-size:28px;
}
@media all and (max-width: 700px) {
  .index_s3s1s1 {
    font-size:20px;
    margin:20px;
  }
}

.index_s3s1 {
  margin:20px;
  height:fit-content;/*calc(100% - 36px)*/
  border-radius:60px;
  background-color:transparent;
  border:2px white solid;
}

.index_s3 {
  margin:0;
}

.index_s2 {
  margin:20px;
  margin-top:40px;
  height:2px;
  background-color:white;
}

.index_s1s1 {
  position:absolute;
  top:100%;
  right:0;
  font-size: 20px;
  line-height: 24px;
  margin:0;
}
@media all and (max-width: 700px) {
  .index_s1s1 {
    font-size: 16px;
    line-height:19.2px;
  }
}

.index_s1 {
  position:relative;
  font-size: 48px;
  font-weight:normal;
  margin:20px 20px;
  line-height: 58px;
  width:fit-content;
}
@media all and (max-width: 700px) {
  .index_s1 {
    font-size: 28.8px;
    line-height:34.8px;
  }
}

.index_ls1s4s1s1s1 {
  margin:0;
  line-height:64px;
  font-size:64px;
  color:transparent;
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: white;
  font-family: 'Raleway', sans-serif;
}

.index_ls1s4s1s1 {
  margin:0 auto;
  width:0;
  padding:20px 30px;
  background-color:transparent;
  background-color:rgba(255,255,255,0.2);
  border-radius:20px;
  white-space:nowrap;
  overflow:hidden;
  opacity:0;
  animation:index_ls1s4s1s1kf1 1s 1s forwards;
}
@keyframes index_ls1s4s1s1kf1 {
  0% {width:0;opacity:0;}
  100% {width:557.21875px;opacity:1;}
}
@media all and (max-width: 700px) {
  .index_ls1s4s1s1s1 {
    line-height:30px;
    font-size:30px;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: white;
  }
  @keyframes index_ls1s4s1s1kf1 {
    0% {width:0;opacity:0;}
    100% {width:261.203125px;opacity:1;}
  }
}

.index_ls1s4s1 {
  width:100%;
}

.index_ls1s4 {
  position:absolute;
  left:0;
  bottom:0;
  width:100%;
  height:100%;
  display: flex;
  -webkit-box-pack: center;
  -moz-box-pack: center;
  -ms-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -moz-box-align: center;
  -ms-box-align: center;
  flex-direction: column;
  align-items: flex-start;
}

.index_ls1s3 {
  position:absolute;
  left:20px;
  bottom:20px;
  width:fit-content;
  color:white;
  font-size:16px;
  padding:0 10px;
  opacity:0;
  animation:index_ls1s3kf1 1s linear 1.6s forwards;
}
@keyframes index_ls1s3kf1 {
  0% {opacity:0;}
  100% {opacity:1;}
}

.index_ls1s2 {
  position:absolute;
  right:-60px;
  bottom:20px;
  width:40px;
  height:40px;
  background-color:white;
  border-radius:20px;
  animation:index_ls1s2kf1 1s 1.3s forwards;
}
@keyframes index_ls1s2kf1 {
  0% {width:40px;right: -60px;}
  100% {width:200px;right: 20px;}
}

.index_ls1s1 {
  position:absolute;
  left:-60px;
  top:20px;
  width:40px;
  height:40px;
  background-color:white;
  border-radius:20px;
  animation:index_ls1s1kf1 1s 1.3s forwards;
}
@keyframes index_ls1s1kf1 {
  0% {width:40px;left: -60px;}
  100% {width:200px;left: 20px;}
}

.index_ls1 {
  position:fixed;
  left:0;
  top:0;
  width:100%;
  height:100%;
  background: linear-gradient(135deg, rgba(216, 166, 159, 0.8) 0%, rgba(10, 132, 255, 0.8) 100%), #000000;
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}

/*

.index_s1s2s1s3 {
  font-size:2vw;
  font-size:clamp(0px, 2vw, 21px);
  line-height:initial;
  margin:0px 40px;
  color:white;
  padding:0.5rem 1rem;
  border:1px solid white;
  border-radius:20px;
  cursor:pointer;
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}
.index_s1s2s1s3:hover {
  background-color:#333333;
  margin:0px 20px;
  background-color:rgba(255,255,255,0.2);
}

.index_s1s2s1s2 {
  font-size:2.25vw;
  font-size:clamp(0px, 2.25vw, 24px);
  line-height:initial;
  margin:0px;
  color:white;
  color:rgba(255,255,255,0.8);
}

.index_s1s2s1s1 {
  font-size:6vw;
  font-size:clamp(0px, 6vw, 64px);
  line-height:initial;
  margin:0px;
  font-weight:normal;
}

.index_s1s2s1 {
  width:fit-content;
  margin:0px auto;
  text-align:center;
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}

.index_s1s3 {
  width:100%;height:100%;background-color:black;
}

.index_s1s2 {
  position:sticky;
  top:0px;
  width:100%;
  height:100%;
  display: flex;
  -webkit-box-pack: center;
  -moz-box-pack: center;
  -ms-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -moz-box-align: center;
  -ms-box-align: center;
  flex-direction: column;
  align-items: flex-start;
  color:white;
  background: linear-gradient(292.81deg, rgba(10, 132, 255, 0.6) -0.33%, rgba(216, 166, 159, 0.6) 100%), #000000;
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}

.index_s1s1sc1 {
  width:100%;height:100%;background-color:#FEFB41;border-radius:40px;
  overflow:hidden;
}

.index_s1s1 {
  width:100%;height:100%;background-color:white;border-radius:40px;
  overflow:hidden;
}

.index_s1 {
  width:100%;height:100%;position:relative;left:0px;top:0px;overflow-x:hidden;overflow-y:scroll;
}

.index_about_s4 {
  position:sticky;
  top:80px;
  margin:20px;
  margin-top:80px;
  height:calc(100% - 100px);
  background-color:rgba(240,240,240,0.8);
  border-radius:20px;
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}

.index_about_s2s3 {
  width:160px;
  height:40px;
  position:absolute;
  right:20px;
  top:20px;
  background-color:rgba(240,240,240,0.8);
  border-radius:20px;
  line-height:40px;
  font-size:20px;
  color:rgba(0,0,0,0.8);
  text-align:center;
  cursor:pointer;
  backdrop-filter:blur(6px);
  -webkit-backdrop-filter:blur(6px);
  -moz-backdrop-filter:blur(6px);
  -o-backdrop-filter:blur(6px);
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}
.index_about_s2s3:hover {
  width:180px;
  right:10px;
  background-color:rgba(82,170,242,0.8);
  color:white;
  font-size:22px;
  box-shadow:0px 5px 10px rgba(0,0,0,0.1);
}

.index_about_s2s2s1s1 {
  padding:0px 20px;
  pointer-events:none;
}
@media all and (max-width: 650px) {
  .index_about_s2s2s1s1 {
    opacity:0;
    height:0px;
    display: block;
  }
}

.index_about_s2s2s1 {
  width:fit-content;
  margin:0px auto;
  padding:0px 40px;
  background-color:rgba(240,240,240,0.8);
  backdrop-filter:blur(6px);
  -webkit-backdrop-filter:blur(6px);
  -moz-backdrop-filter:blur(6px);
  -o-backdrop-filter:blur(6px);
  border-radius:20px;
}
@media all and (max-width: 650px) {
  .index_about_s2s2s1 {
    width:calc(100% - 80px);
  }
}

.index_about_s2s2 {
  width:calc(100% - 280px);
  height:40px;
  position:absolute;
  border-radius:20px;
  left:80px;top:20px;
  line-height:40px;
  font-size:16px;
  color:black;
  text-align:center;
}

.index_about_s2s1 {
  width:40px;
  height:40px;
  position:absolute;
  left:20px;
  top:20px;
  background-color:rgba(240,240,240,0.8);
  border-radius:20px;
}

.index_about_s2 {
  width:100%;
  height:80px;
  position:fixed;
  left:0px;
  top:0px;
}

.index_about_s1 {
  position:relative;
  margin:20px;
  margin-top:80px;
  height:calc(100% - 100px);
  background-color:white;
  box-shadow:0px 20px 40px rgba(0,0,0,0.2);
  border-radius:20px;
}

.index_about-body {
  background-color:white;
  transition:background-color 0.3s;-moz-transition:background-color 0.3s;-webkit-transition:background-color 0.3s;-o-transition:background-color 0.3s;
}

.index_s1 {
  position:absolute;left:0px;top:0px;width:100%;height:100%;
}

.index_s1s1 {
  width:50%;
  height:100%;
  position:absolute;
  left:0px;
  top:0px;
  background-color:black;
  color:white;
  cursor:pointer;
  display: flex;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  flex-direction: column;
  align-items: flex-start;
  transition:width 0.3s, height;-moz-transition:width 0.3s, height 0.3s;-webkit-transition:width 0.3s, height 0.3s;-o-transition:width 0.3s, height 0.3s;
}
@media all and (max-width: 650px) {
  .index_s1s1 {
    width:100%;
    height:50%;
  }
}

.index_s1s1s1 {
  width:100%;
  height:fit-content;
  text-align:center;
  position:relative;
  transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;
}

.index_s1s1s2 {
  opacity:0;position: absolute;right: 0;bottom: 0;min-width: 100%; min-height: 100%;
  animation:index_s1s1s2kf1 1s 2s forwards;
}
@keyframes index_s1s1s2kf1 {
  0% {opacity:0;}
  100% {opacity:0.2;}
}

.index_s1s2 {
  width:50%;
  height:100%;
  position:absolute;
  right:0%;
  bottom:0px;
  background-color:rgba(10,132,255);
  background: linear-gradient(296.82deg, #0A84FF 0%, #D8A69F 100%);
  animation:index_s1s2kf1 4s 0s infinite;
  color:white;
  cursor:pointer;
  display: flex;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  flex-direction: column;
  align-items: flex-start;
  background-size: 100% 400%;
  transition:width 0.3s, height;-moz-transition:width 0.3s, height 0.3s;-webkit-transition:width 0.3s, height 0.3s;-o-transition:width 0.3s, height 0.3s;
}
@media all and (max-width: 650px) {
  .index_s1s2 {
    width:100%;
    height:50%;
    left:0px;
    bottom:0%;
  }
}
@keyframes index_s1s2kf1 {
  0% {background-position: 0% 0%;}
  50% {background-position: 0% 100%;}
  100% {background-position: 0% 0%;}
}*/