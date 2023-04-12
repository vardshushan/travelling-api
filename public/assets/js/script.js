function hoverPuzzleEnter(element) {
    const id = element.dataset.id
    element.classList.remove('slide_return')
    element.classList.add('slide_move')

    const elementById = document.getElementById(id)
    elementById.classList.remove('slide_return')
    elementById.classList.add('slide_move')
}

function hoverPuzzleOut(element) {
    const id = element.dataset.id
    element.classList.remove('slide_move')
    element.classList.add('slide_return')

    const elementById = document.getElementById(id)
    elementById.classList.remove('slide_move')
    elementById.classList.add('slide_return')
}

function showTechnology(element)
{
    const id = element.dataset.id

    let names = document.getElementsByClassName('tech-names')

    Array.from(names).forEach(element => {
        element.classList.remove('active')
    })

    element.classList.add('active')

    let techs = document.getElementsByClassName('tech_content')

    Array.from(techs).forEach(element => {
        element.style.display = 'none'
    })

    let contents = document.getElementsByClassName(`content_${id}`)

    Array.from(contents).forEach(element => {
        element.style.display = 'block'
    })
}

function setVacancyId(vacancy_id)
{
    let input = document.getElementById('vacancy_id')
    input.setAttribute('value', vacancy_id)
}

$(document).ready(function(){
    $(this).scrollTop(0);
    if ($('.blog-single img') !== undefined) {
        $('.blog-single').find('img').addClass('img-fluid');
    }
});

