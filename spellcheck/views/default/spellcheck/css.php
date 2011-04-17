.loading {
	padding: 0.5em 8px;
	display: none;
	font-size: small;
	margin:0 5px;
}
.spellcheck-suggestbox {
	position: absolute;
	display: none;
	z-index: 9999;
	overflow: none;
	padding: 0px 9px 9px 0px;
	font: normal 13px arial;
}
.spellcheck-suggestbox em {
	border-top: 1px solid #ccc;
	border-left: 1px solid #bbb;
	border-right: 1px solid #bbb;
	padding: 3px 6px 3px 6px;
	display: block;
	margin: 0px;
	text-decoration: none;
	color: #333;
	font-style: italic;
}
.spellcheck-suggestbox a, .spellcheck-suggestbox a:visited {
	border-left: 1px solid #bbb;
	border-right: 1px solid #bbb;
	padding: 3px 6px 3px 6px;
	display: block;
	margin: 0px;
	text-decoration: none;
	color: #333;
	outline: none;
}
.spellcheck-suggestbox a.first, .spellcheck-suggestbox a.first:visited {
	border-top: 1px solid #ccc;
}
.spellcheck-suggestbox a:hover {
	color: #000;
	background: #ddd;
}
.spellcheck-suggestbox-words {
	background: #fff;
}
.spellcheck-suggestbox-foot {
	border-top: 1px solid #ddd;
	background: #fff;
}
.spellcheck-suggestbox-foot a, .spellcheck-suggestbox-foot a:visited {
	outline: none;
} 
.pellcheck-focus-helper {
	position: absolute;
	top: -2000px;
	z-index: 0;
}
.spellcheck-word-highlight {
	color: #d70303;
	text-decoration: none;
	cursor: pointer;
}
.spellcheck-badwords {
	margin-bottom: 2em;
	margin-top: -0.5em;
	font-size: 12px;
	border: 1px solid #bbb;
	padding: 4px 6px;
}
.spellcheck-sep {
	padding-right: 0.5em;
}
.spellcheck-sep-last {
	display: none;
}
