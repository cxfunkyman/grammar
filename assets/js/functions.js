

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
