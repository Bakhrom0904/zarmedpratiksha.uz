function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}

$(document).ready(function () {
    // $('img').each(function () {
    //     $(this).attr('href', $(this).attr('src'));
    // });
    // $(':not(a) > img').magnificPopup({type: 'image'});

    $('#department').change(function() {
        let department_id = $(this).val();
        let doctor_id = $('#doctor');
        let ul = $('#doctor + .nice-select ul');
        $.get('/doctors-by-department?department_id=' + department_id, function (data) {
            let doctors = JSON.parse(data);
            if (doctors) {
                let options = [];
                let li = [];
                for(let i in doctors) {
                    options.push($('<option value="' + i +  '">' + doctors[i] + '</option>'));
                    li.push($('<li data-value="' + i + '" class="option">' + doctors[i] + '</li>'));
                };
                doctor_id.html('');
                ul.html('');
                doctor_id.append(options);
                ul.append(li);
            }
        })
    })

    $('#appointment-date').change(function() {
        loadTimeTable();
    })

    $('#doctor').change(function() {
        loadTimeTable();
    })

    function loadTimeTable() {
        let date = $('#appointment-date').val();
        let doctor_id = $('#doctor').val();
        let div = $('#time');
        div.removeClass('d-none');
        div.addClass('border-danger');
        if (doctor_id && date && (new Date(date)) > (new Date())) {
            $.get('/timetable-by-doctor?doctor_id=' + doctor_id + '&date=' + date, function (data) {
                let response = JSON.parse(data);
                if (response && response.data) {
                    let badges = [];

                    for(let i in response.data) {
                        badges.push($('<span data-type="time" time_id="' + i + '" class="cursor-pointer badge badge-medium p-2 m-2">' + response.data[i] + '</span>'));
                    };
                    div.html('');
                    div.append(badges);
                    div.removeClass('border-danger');
                    $('span[data-type="time"]').click(function() {
                        let current = $(this);
                        $('span[data-type="time"]').removeClass('bg-success');
                        $('span[data-type="time"]').removeClass('text-white');
                        $('span[data-type="time"]').addClass('badge-medium');
                        $(this).addClass('bg-success text-white');
                        $('#appointment-time_id').val($(this).attr('time_id'));
                    })
                } else {
                    div.html('<span class="small text-danger">No data</span>');
                }
            })
        } else {
            div.html('<span class="small text-danger">No data</span>')
        }
    }
})
