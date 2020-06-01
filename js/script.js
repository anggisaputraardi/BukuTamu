$(function(){

$('#nama').keyboard({
	display:{
		'bksp' :"\u2190",
'accept' : '\DONE',
'normal' : 'ABC',
'meta1' : '.?123',
'meta2' : '#+='
},

layout : 'custom',
customLayout :{
'normal' : [
' q w e r t y u i o p {bks}',
' a s d f g h j k l {enter}',
' {s} z x c v b n m , . {s}',
'{meta1} {space} {meta1} {accept}'
],

'shift': [
' Q W E R T Y U I O P {bksp}',
' A S D F G H J K L {enter}',
' {s} Z X C V B N M , . {s}',
' {meta1} {space} {meta1} {accept}'
],

'meta1' : [
' 1 2 3 4 5 6 7 8 9 0 {bksp}',
' - / : ; ( ) \u20ac & @ {enter}',
'{meta2} , . ? ! \' " {meta2}',
'{normal} {space} {normal} {accept}'
],

'meta2' : [
' [ ] { } # % ^ * + = {bksp}',
' _ \\ | ~ &lt; &gt; $ \u00a3 \u00a5 {enter}',
'{meta1} . , ? ! \' " {meta1}',
'{normal} {space} {normal} {accept}'
]
}
});

$('#alamat').keyboard({
	display:{
		'bksp' :"\u2190",
'accept' : '\DONE',
'normal' : 'ABC',
'meta1' : '.?123',
'meta2' : '#+='
},

layout : 'custom',
customLayout :{
'normal' : [
' q w e r t y u i o p {bks}',
' a s d f g h j k l {enter}',
' {s} z x c v b n m , . {s}',
'{meta1} {space} {meta1} {accept}'
],

'shift': [
' Q W E R T Y U I O P {bksp}',
' A S D F G H J K L {enter}',
' {s} Z X C V B N M , . {s}',
' {meta1} {space} {meta1} {accept}'
],

'meta1' : [
' 1 2 3 4 5 6 7 8 9 0 {bksp}',
' - / : ; ( ) \u20ac & @ {enter}',
'{meta2} , . ? ! \' " {meta2}',
'{normal} {space} {normal} {accept}'
],

'meta2' : [
' [ ] { } # % ^ * + = {bksp}',
' _ \\ | ~ &lt; &gt; $ \u00a3 \u00a5 {enter}',
'{meta1} . , ? ! \' " {meta1}',
'{normal} {space} {normal} {accept}'
]
}
});

$('#nope').keyboard({
	display:{
		'bksp' :"\u2190",
'accept' : '\DONE',
'normal' : '.?123',

},

layout : 'custom',
customLayout :{
'normal' : [
' 1 2 3 4 5 6 7 8 9 0 {bksp}',
' - / : ; ( ) \u20ac & @ {enter}',
', . ? ! \' " ',
'  {accept}'
]
}
});
 
	 
})