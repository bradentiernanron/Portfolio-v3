@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap');

body {
  margin:0px;
  font-family: 'Raleway', sans-serif;
  background-color:black;
  overflow-x:hidden;
  -webkit-overflow-x:hidden;
  -moz-overflow-x:hidden;
  -o-overflow-x:hidden;
}

h1 {
  font-size:28px;
  line-height:35px;
  font-family: 'Inter', sans-serif;
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
}