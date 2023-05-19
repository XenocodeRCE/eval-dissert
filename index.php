<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!DOCTYPE html>
<html class="has-background-grey-dark" data-mci-setup="true">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Fiche d'évaluation - Dissertation</title>
      <link rel="stylesheet" href="bulma.min.css">
      <link rel="stylesheet" href="documentation.css">
      <style>
         #mainContent {
         min-width: 800px !important;
         }
         label:before,
         label:after {
         margin-left: -10px;
         margin-top: 2px;
         }
         label {
         margin-left: 30px;
         color: black;
         }
         label p {
         margin-left: 90px;
         font-size: 0.85rem;
         }
         input[type=text] {
         border: none;
         box-shadow: none;
         margin-top: 10px;
         font-size: 0.75rem;
         display: none;
         }
         div.block input[type=text] {
         display:inline-block;
         font-size: 1rem;
         text-align: center;
         }
         button {
         margin-top: 7px;
         }
         .field+h3 {
         margin-top: 1.75rem;
         }
         h3 {
         margin-bottom: 1.25rem !important;
         }
		 
		 .star-container {
			direction: rtl;
			/* Reverse the position od stars */
		}
		button {
			color: #fff;
			font-size: 32px;
			margin: 4px;
			background: transparent;
			border: none;
			transition: 0.2s;
		}
		#rating {
			color: #fff;
			margin-top: 12px;
			font-size: 20px;
			text-align: center;
		}
		.container button:hover {
			color: rgb(255, 238, 0);
		}
		.star1:hover ~ .star {
			color:rgb(255, 238, 0);
		}
		.star2:hover ~ .star {
			color: rgb(255, 238, 0);
		}
		.star3:hover ~ .star {
			color: rgb(255, 238, 0);
		}
		.star4:hover ~ .star {
			color: rgb(255, 238, 0);
		}
		.star5:hover ~ .star {
			color: rgb(255, 238, 0);
		}
		.hovered {
			color: rgb(255, 238, 0);
		}
		.hovered ~ .star {
			color: rgb(255, 238, 0);
		}
      </style>
      <style>
          .ms-editor-squiggler{display:none !important;visibility:hidden !important}editor-card{display:none !important;opacity:0 !important;pointer-events:none;visibility:hidden !important}.AsanaMain .TaskRow-taskName,.AsanaMain .TaskName-input{min-height:21px !important}.SpellingErrorV2{background-image:none !important;border-bottom:none !important;pointer-events:none !important}@font-face{font-family:"Inter";font-style:normal;font-weight:400;src:local("Inter-Regular"),url("https://assets.merci-app.com/fonts/Inter-Regular.woff2") format("woff2"),url("https://assets.merci-app.com/fonts/Inter-Regular.woff2") format("woff")}@font-face{font-family:"Inter";font-style:normal;font-weight:500;src:local("Inter-Medium"),url("https://assets.merci-app.com/fonts/Inter-Medium.woff2") format("woff2"),url("https://assets.merci-app.com/fonts/Inter-Medium.woff") format("woff")}@font-face{font-family:"Inter";font-style:normal;font-weight:600;src:local("Inter-SemiBold"),url("https://assets.merci-app.com/fonts/Inter-SemiBold.woff2") format("woff2"),url("https://assets.merci-app.com/fonts/Inter-SemiBold.woff") format("woff")}@font-face{font-family:"Inter";font-style:normal;font-weight:700;src:local("Inter-Bold"),url("https://assets.merci-app.com/fonts/Inter-Bold.woff2") format("woff2"),url("https://assets.merci-app.com/fonts/Inter-Bold.woff") format("woff")}@font-face{font-family:"Inter";font-style:normal;font-weight:800;src:local("Inter-ExtraBold"),url("https://assets.merci-app.com/fonts/Inter-ExtraBold.woff2") format("woff2"),url("https://assets.merci-app.com/fonts/Inter-ExtraBold.woff") format("woff")}@font-face{font-family:"Tropiline";font-style:normal;font-weight:700;src:local("Tropiline-Bold"),url("https://assets.merci-app.com/fonts/Tropiline-Bold.woff2") format("woff2"),url("https://assets.merci-app.com/fonts/Tropiline-Bold.woff") format("woff")}.kix-spellcheck-with-explanation-bubble,.kix-spell-bubble{display:none !important}</style>  
	  <style>
	  .right {
  float: right;
}

.left {
  float: none;
}

.rating .stars {
  margin-right: 15px;
}

.rating .stars .star {
  float: left;
  padding: 5px 2px;
  cursor: pointer;
}

.rating .stars .star:before {
  font-family: 'FontAwesome';
  content: '\f005';
  color: #f5f5f5;
  font-size: 3em;
}

.rating .stars .star:hover:before,
.rating .stars .star.to_rate:before,
.rating .stars .star.rated:before {
  color: #ffdd57;
}

.rating .stars .star.no_to_rate:before {
  color: #f5f5f5;
}
</style>
	  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   </head>
   <body class="container is-10 is-size-4 is-size-6-mobile mci-c4f7c3b940b2fda375c61f1064b5e7f6" spellcheck="false">
      <div class="columns is-mobile">
         <div class="column is-10 is-offset-1 has-background-white" id="mainContent">
            <div class="container py-4 px-6">
               <h1 class="title is-1 has-text-centered pt-5">
                  Fiche d'évaluation
               </h1>
               <p class="subtitle is-3 has-text-centered">
                  Dissertation
               </p>
               <p class="is-size-6 has-text-centered block">Évaluation sur 70, la note sur 20 vaut : <b>(note*20)/70</b></p>
               <div class="block">
               </div>
               <h2 class="title is-3 mt-6">📜 INTRODUCTION</h2>
               <div class="box p-5">
                  <div class="field columns">
                     <div class="column is-11">
				 
                        <input id="switchExample1a1" type="checkbox" name="switchExample1a1"  class="switch is-rounded is-outlined">
                        <label for="switchExample1a1">
                           Le travail contient une amorce
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">On retrouve une présentation concrète du paradoxe, exemplifié à partir de l'histoire ou des sciences ou de la culture littéraire qui amène petit à petit au problème du sujet
                              <input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-1a1">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-1a1" aria-pressed="false">＋</button>
                     </div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample1a2" type="checkbox" name="switchExample1a2" class="switch is-rounded is-outlined">
                        <label for="switchExample1a2">
                           Le travail contient des tentatives de définitions
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">On retrouve des définitions claires, qui apportent des distinctions utiles à l'analyse du sujet. Les termes ne sont pas définis isolément, ni les définitions listées les unes à la suite des autres.<input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-1a2">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-1a2" aria-pressed="false">＋</button>
                     </div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample1a3" type="checkbox" name="switchExample1a3" class="switch is-rounded is-outlined">
                        <label for="switchExample1a3">
                           Il y a explicitation du présupposé du sujet
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">Le présupposé est explicité clairement, des alternatives sont énoncées et les enjeux sont soulevés <input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-1a3">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-1a3" aria-pressed="false">＋</button>
                     </div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample1b1" type="checkbox" name="switchExample1b1" class="switch is-rounded is-outlined">
                        <label for="switchExample1b1">
                           Le sujet du devoir est problématisé
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">La problématisation est un moment dans l'introduction qui arrive à provoquer chez le lecteur une tension réelle entre les alternatives proposées<input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-1b1">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-1b1" aria-pressed="false">＋</button></div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample1b2" type="checkbox" name="switchExample1b2" class="switch is-rounded is-outlined" spellcheck="false">
                        <label for="switchExample1b2">
                           Il y a une problématique
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">La problématique vient conclure la problématisation, sous forme de question en X ou bien Y, où la proposition X est vraie seule, la proposition Y est vraie seule, mais les deux en même temps semblent incompatibles <input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-1b2">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-1b2" aria-pressed="false">＋</button></div>
                  </div>
				  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample1b3" type="checkbox" name="switchExample1b3" class="switch is-rounded is-outlined" spellcheck="false">
                        <label for="switchExample1b3">
                           Le plan est travaillé
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">Le plan doit rendre compte d'une argumentation claire et articulée. Sans disposer du brouillon, la seule lecture permet de comprendre toute la structure du devoir de façon synthétique <input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-1b3">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-1b3" aria-pressed="false">＋</button></div>
                  </div>
				  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample1b4" type="checkbox" name="switchExample1b4" class="switch is-rounded is-outlined" spellcheck="false">
                        <label for="switchExample1b4">
                           Le plan est détaillé.
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">À chaque annonce de la thèse principale, on doit trouver un certain nombre de détails permettant la pleine compréhension des gros traits argumentatifs du devoir <input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-1b4">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-1b4" aria-pressed="false">＋</button></div>
                  </div>
               </div>
			   <h2 class="title is-3 mt-6">✍️ DÉVELOPPEMENT</h2>
               <div class="box p-5">
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample2a1" type="checkbox" name="switchExample2a1" class="switch is-rounded is-outlined">
                        <label for="switchExample2a1">
                           Le plan est dialectique
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">Le devoir contient trois thèses qui ne se répètent pas, qui ne se contredisent pas (ex: oui, non, ça dépend), qui rendent compte d'un cheminement dialectique<input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-2a1">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-2a1" aria-pressed="false">＋</button>
                     </div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample2a2" type="checkbox" name="switchExample2a2" class="switch is-rounded is-outlined">
                        <label for="switchExample2a2">
                           Les thèses sont structurées
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">Les thèses sont annoncées clairement en début de chaque partie. L'annonce n'est pas un titre, mais une présentation de ce que l'on peut attendre de cette partie du devoir<input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-2a2">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-2a2" aria-pressed="false">＋</button>
                     </div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample2b0" type="checkbox" name="switchExample2b0" class="switch is-rounded is-outlined">
                        <label for="switchExample2b0">
                           Le développement est soigné, sérieux et argumenté
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">Chaque thèse est appuyée par des arguments logiques, des syllogismes, des analyses d'implications. Ces arguments ne sont pas réduits à des références ou des doctrines de philosophes, ni ne reposent sur des opinions ou n'invitent au relativisme<input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-2b0">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-2b0" aria-pressed="false">＋</button></div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample2b1" type="checkbox" name="switchExample2b1" class="switch is-rounded is-outlined">
                        <label for="switchExample2b1">
                           Il y a des références
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">Il y a mobilisation de références utiles à l'analyse et l'élaboration d'une réponse. Les références ne sont pas confondues avec des exemples.<input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-2b1">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-2b1" aria-pressed="false">＋</button></div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample2b2" type="checkbox" name="switchExample2b2" class="switch is-rounded is-outlined">
                        <label for="switchExample2b2">
                           Il y a des transitions
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">Il y a une transition entre chaque grande thèse, possiblement à la fin, qui synthétise la partie précédente et annonce la partie suivante<input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-2b2">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-2b2" aria-pressed="false">＋</button></div>
                  </div>
                  
               </div>
               <h2 class="title is-3 mt-6">✅ CONCLUSION</h2>
               <div class="box p-5">
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample3a1" type="checkbox" name="switchExample3a1" class="switch is-rounded is-outlined">
                        <label for="switchExample3a1">
                           Il y a une synthèse
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">La conclusion commence par synthétiser le cheminement argumentatif de la dissertation, en soulignant les points forts et les limites rencontrées à chaque étape <input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-3a1">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-3a1" aria-pressed="false">＋</button>
                     </div>
                  </div>
                  <div class="field columns">
                     <div class="column is-11">
                        <input id="switchExample3b1" type="checkbox" name="switchExample3b1" class="switch is-rounded is-outlined">
                        <label for="switchExample3b1">
                           Il y a une réponse
                           <div class="rating left">  <div class="stars right">    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>    <a class="star"></a>  </div></div>
                           <p class="has-text-grey">La conclusion contient un moment distinct des potentiels autres, où une réponse au sujet est clairement et explicitement apportée <input class="input is-small has-background-white-bis" type="text" placeholder="" id="input-text-3b1">
                           </p>
                        </label>
                     </div>
                     <div class="column"><button class="button is-white has-text-grey" id="button-3b1" aria-pressed="false">＋</button></div>
                  </div>                  
               </div>
            </div>
         </div>
      </div>
      <script>
         var buttons = document.getElementsByClassName("button")
         for (var i = 0; i < buttons.length; i++) {
         	buttons[i].onclick = function (e) {
         		var button = e.target;
         		var buttonID = button.id;
         		var buttonIDend = buttonID.substr(buttonID.length - 3);
         		var textInput = document.getElementById('input-text-' + buttonIDend);
         		var buttonStatus = button.getAttribute("aria-expanded");
         		if (buttonStatus == "true") {
         			textInput.style.display = "none";
         			button.innerHTML = '＋';
         			button.setAttribute("aria-expanded", "false");
         		} else {
         			textInput.style.display = "inline-block";
         			button.innerHTML = '–';
         			button.setAttribute("aria-expanded", "true");
         		}
         	}
         };
      </script>
      <script>
          jQuery(document).ready(function($) {
  $('.rating .star').hover(function() {
    $(this).addClass('to_rate');
    $(this).parent().find('.star:lt(' + $(this).index() + ')').addClass('to_rate');
    $(this).parent().find('.star:gt(' + $(this).index() + ')').addClass('no_to_rate');
  }).mouseout(function() {
    $(this).parent().find('.star').removeClass('to_rate');
    $(this).parent().find('.star:gt(' + $(this).index() + ')').removeClass('no_to_rate');
  }).click(function() {
    $(this).removeClass('to_rate').addClass('rated');
    $(this).parent().find('.star:lt(' + $(this).index() + ')').removeClass('to_rate').addClass('rated');
    $(this).parent().find('.star:gt(' + $(this).index() + ')').removeClass('no_to_rate').removeClass('rated');
    /*Save your rate*/
    /*TODO*/
  });
});
      </script>
    <footer style="
    text-align: center;
    font-size: small;
    color: white;
">
          <p>Template par <a href="https://github.com/eyssette/ressources-generales-enseignement-philosophie/blob/master/checklist.html">Cédric Eysette </a></p>
      </footer>
   </body>
</html>