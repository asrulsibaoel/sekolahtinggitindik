 var today = new Date($.now());
$('#calendar').fullCalendar({
        defaultView: 'month',  
        handleWindowResize: true,   
        height: 500,   
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek'
        },
        events: [{
            title: 'Libur',
            start: new Date($.now() + 158000000),
            className: 'bg-purple'
        }, {
            title: 'Libur',
            start: today,
            end: today,
            className: 'bg-red'
        }, {
            title: 'Libur',
            start: new Date($.now() + 338000000),
            className: 'bg-primary'
        }],
        editable: false,
        droppable: false, // this allows things to be dropped onto the calendar !!!
        eventLimit: false, // allow "more" link when too many events,
});

   