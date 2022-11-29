const textArea1 = document.querySelector('#textArea1');
const textArea2 = document.querySelector('#textArea2');
const errorAmount = document.querySelector('#errorAmount');
const essayGrade = document.querySelector('#essayGrade');
const finalGrade = document.querySelector('#finalGrade');
const btnGrade = document.querySelector('#btnGrade');
const btnNew = document.querySelector('#btnNew');

const resultForm = document.querySelector('#resultForm');

ClassicEditor
    .create(document.querySelector('#textArea1'), {
        toolbar: {
            items: [
                'selectAll', '|',
                'heading', '|',
                'bold', 'italic',
                'outdent', 'indent', '|',
                'undo', 'redo', '|',
                'link', 'blockQuote', 'insertTable', 'mediaEmbed'
            ],
            shouldNotGroupWhenFull: true
        },
    })
    .catch(error => {
        console.error(error);
    });
ClassicEditor
    .create(document.querySelector('#textArea2'), {
        toolbar: {
            items: [
                'selectAll', '|',
                'heading', '|',
                'bold', 'italic',
                'outdent', 'indent', '|',
                'undo', 'redo', '|',
                'link', 'blockQuote', 'insertTable', 'mediaEmbed'
            ],
            shouldNotGroupWhenFull: true
        },
    })
    .catch(error => {
        console.error(error);
    });
