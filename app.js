let htmlEscapes = document.querySelectorAll('[data-html-codes]')
console.log(htmlEscapes)

htmlEscapes.forEach(element => {
    let text = element.innerHTML;
    console.log(text)

    text = text.replace('/(>)/g', '<span>&#62;</span>');
    text = text.replace('/(>)/g', '<span>&#62;</span>');
    text = text.replace('/"(.*?)"/g', '<span str>"$1"</span>')
    text = text.replace("/'(.*?)'/g", '<span str>\'$1\'</span>')

    element.textContent = text
    console.log(text)
});