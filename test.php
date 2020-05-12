<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <style>


#content {
  max-width: 48rem;
  margin: 0 auto;
  text-align: left;
  padding: 1rem 2rem;
}
#content:not(.en) [data-lang='en'], #content:not(.no) [data-lang='no'], #content:not(.sv) [data-lang='sv'], #content:not(.ru) [data-lang='ru'], #content:not(.es) [data-lang='es'] {
  display: none;
}
#content.en [data-lang='en'], #content.no [data-lang='no'], #content.sv [data-lang='sv'], #content.ru [data-lang='ru'], #content.es [data-lang='es'] {
  display: block;
}



.switch {
  position: relative;
  cursor: pointer;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
}

.current {
  text-transform: uppercase;
  height: 42px;
  position: relative;
  z-index: 1;
  font-size: 1rem;
  text-align: center;
  line-height: 42px;
  display: -webkit-box;
  display: flex;
  background-color: rgba(0, 0, 0, 0);
  -webkit-transition: all .2s ease-out;
  transition: all .2s ease-out;
  border-radius: 3px;
  padding: 0 .2em 0 .7em;
}
.current span {
  display: inline-block;
  line-height: 1;
  padding: .7em .2em 0 0;
}
.current .arrow {
  display: inline-block;
  width: 20px;
  height: 20px;
}
.current:hover {
  background-color: rgba(0, 0, 0, 0.1);
}

.options {
  position: absolute;
  right: 0;
  top: .6em;
  z-index: 0;
  opacity: 0;
  -webkit-transition: all .36s ease-out;
  transition: all .36s ease-out;
  display: none;
  overflow: hidden;
  box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
}
.switch.show-options .options {
  display: block;
  z-index: 5;
}
.switch.anim-options .options {
  opacity: 1;
}
.switch.show-shadow .options {
  box-shadow: 0 2px 12px -4px rgba(0, 0, 0, 0.4);
}

.options-list {
  color: #313436;
  margin: 0;
  padding: .4rem 0.8em;
  position: relative;
  z-index: 5;
}
.options-list li {
  list-style: none;
  padding: 0;
  margin: 0;
  padding: 0.75em;
  border-bottom: 1px solid #E1E4E6;
  -webkit-transform: translateX(10px);
          transform: translateX(10px);
  -webkit-transition: all .24s ease-out;
  transition: all .24s ease-out;
  -webkit-transition-delay: .1s;
          transition-delay: .1s;
  opacity: 0;
  font-size: 1rem;
  line-height: 1.3;
  white-space: nowrap;
}
.options-list li:last-child {
  border-bottom: none;
}
.options-list li:nth-child(1) {
  -webkit-transition-delay: .1s;
          transition-delay: .1s;
}
.options-list li:nth-child(2) {
  -webkit-transition-delay: .15s;
          transition-delay: .15s;
}
.options-list li:nth-child(3) {
  -webkit-transition-delay: .2s;
          transition-delay: .2s;
}
.options-list li:nth-child(4) {
  -webkit-transition-delay: .25s;
          transition-delay: .25s;
}
.options-list li:nth-child(5) {
  -webkit-transition-delay: .3s;
          transition-delay: .3s;
}
.options-list li.selected {
  color: #3498DB;
}
.switch.anim-options .options-list li {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  opacity: 1;
}

#trans-circle {
  width: 80px;
  height: 80px;
  position: absolute;
  top: -80px;
  right: -80px;
  padding: 0;
  margin: 0;
  border: none;
  z-index: 1;
  -webkit-transition: all .4s ease-out;
  transition: all .4s ease-out;
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
  overflow: hidden;
}
#trans-circle svg {
  max-width: 100%;
  max-height: 100%;
}

.switch.anim-options #trans-circle {
  -webkit-transform: scale(9);
          transform: scale(9);
}


    </style>
</head>
<body>
   

  <div class="switch">
    <div class="current">
      <span>en</span>
      <em class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><title>ic_arrow_drop_down_18px</title>
    <g fill="#FFFFFF">
        <path d="M5 8l4 4 4-4z"></path>
    </g>
</svg></em>
    </div>
    <div class="options">
      <ul class="options-list">
        <li data-lang="fr">Français</li>
        <li data-lang="en">English</li>

      </ul>
      <div id="trans-circle"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"> <g id="circle" fill="none" fill-rule="evenodd"> <circle id="bg" cx="60" cy="60" r="60" fill="#FFFFFF"/> </g> </svg>
    </div>
  </div>
</div>
  
<main id="content" class="en">
  <h1 data-lang="en">Design</h1>
  <div data-lang="en">
    <p>Design can have different connotations in different fields of application (see design disciplines below), but there are two basic meanings of design: as a verb and as a noun.</p>

    <p><strong>Design</strong> (as a verb: to design) is the intentional creation of a plan or specification for the construction of an object or system or for the implementation of an activity or process.</p>

<p><strong>Design</strong> (as a noun: a design) can refer to such a plan or specification (e.g. a drawing or other document) or to the created object, etc., and features of it such as aesthetic, functional, economic or socio-political.</p>

<p>The process of creating a design can be brief (a quick sketch) or lengthy and complicated, involving considerable research, negotiation, reflection, modelling, interactive adjustment and re-design. In some cases, the direct construction of an object without an explicit prior plan (such as in craftwork and some engineering, coding, and graphic design) is also considered to be a design activity.</p>
  </div>
</main>
    
  
   
   <script>
     let el = $('.switch');
let cur = el.find('.current');
let options = el.find('.options li');
let content = $('#content');

// Open language dropdown panel

el.on('click', function(e) {
  el.addClass('show-options');
  
  setTimeout(function() {
    el.addClass('anim-options');
  }, 50);
  
  setTimeout(function() {
    el.addClass('show-shadow');
  }, 200);
});


// Close language dropdown panel

options.on('click', function(e) {
  e.stopPropagation();
  el.removeClass('anim-options');
  el.removeClass('show-shadow');
  
  let newLang = $(this).data('lang');
  
  cur.find('span').text(newLang);
  content.attr('class', newLang);
  
  setLang(newLang);
  
  options.removeClass('selected');
  $(this).addClass('selected');
  
  setTimeout(function() {
    el.removeClass('show-options');
  }, 600);
});


// Save selected options into Local Storage

function getLang() {
  let lang;
  if (localStorage.getItem('currentLang') === null) {
    lang = cur.find('span').text();
  } else {
    lang = JSON.parse(localStorage.getItem('currentLang')).toLowerCase();
  }
  
  // console.log(lang);

  cur.find('span').text(lang);
  options.parent().find(`li[data-lang="${lang}"]`).addClass('selected');
  
  content.attr('class', lang);
}

getLang();

function setLang(newLang) {
    localStorage.setItem('currentLang', JSON.stringify(newLang).toLowerCase());
  
  content.attr('class', newLang);
  
  // console.log('New language is: ' + newLang);
}  
   </script>
    
</body>
</html>