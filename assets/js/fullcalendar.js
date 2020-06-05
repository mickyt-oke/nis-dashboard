 $(function() {
 	"use strict";
 	$('#calendar1').fullCalendar({
 		header: {
 			left: 'prev,next today',
 			center: 'title',
 			right: 'month,agendaWeek,agendaDay'
 		},
 		defaultDate: '2018-11-12',
 		navLinks: true, // can click day/week names to navigate views
 		selectable: true,
 		selectHelper: true,
 		select: function(start, end) {
 			var title = prompt('Event Title:');
 			var eventData;
 			if (title) {
 				eventData = {
 					title: title,
 					start: start,
 					end: end
 				};
 				$('#calendar1').fullCalendar('renderEvent', eventData, true); // stick? = true
 			}
 			$('#calendar1').fullCalendar('unselect');
 		},
 		editable: true,
 		eventLimit: true, // allow "more" link when too many events
 		events: [{
 			title: 'All Day Event',
 			start: '2018-11-01'
 		}, {
 			title: 'Long Event',
 			start: '2018-11-07',
 			end: '2018-11-10'
 		}, {
 			id: 999,
 			title: 'Repeating Event',
 			start: '2018-11-09T16:00:00'
 		}, {
 			id: 999,
 			title: 'Repeating Event',
 			start: '2018-11-16T16:00:00'
 		}, {
 			title: 'Conference',
 			start: '2018-11-11',
 			end: '2018-11-13'
 		}, {
 			title: 'Meeting',
 			start: '2018-11-12T10:30:00',
 			end: '2018-11-12T12:30:00'
 		}, {
 			title: 'Lunch',
 			start: '2018-11-12T12:00:00'
 		}, {
 			title: 'Meeting',
 			start: '2018-11-12T14:30:00'
 		}, {
 			title: 'Happy Hour',
 			start: '2018-11-12T17:30:00'
 		}, {
 			title: 'Dinner',
 			start: '2018-11-12T20:00:00'
 		}, {
 			title: 'Birthday Party',
 			start: '2018-11-13T07:00:00'
 		}, {
 			title: 'Click for Google',
 			url: 'http://google.com/',
 			start: '2018-11-28'
 		}]
 	});
 	$('#calendar').fullCalendar({
 		header: {
 			left: 'prev,next today',
 			center: 'title',
 			right: 'listDay,listWeek,month'
 		},
 		// customize the button names,
 		// otherwise they'd all just say "list"
 		views: {
 			listDay: {
 				buttonText: 'list day'
 			},
 			listWeek: {
 				buttonText: 'list week'
 			}
 		},
 		defaultView: 'listWeek',
 		defaultDate: '2018-11-12',
 		navLinks: true, // can click day/week names to navigate views
 		editable: true,
 		eventLimit: true, // allow "more" link when too many events
 		events: [{
 			title: 'All Day Event',
 			start: '2018-11-01'
 		}, {
 			title: 'Long Event',
 			start: '2018-11-07',
 			end: '2018-03-10'
 		}, {
 			id: 999,
 			title: 'Repeating Event',
 			start: '2018-11-09T16:00:00'
 		}, {
 			id: 999,
 			title: 'Repeating Event',
 			start: '2018-11-16T16:00:00'
 		}, {
 			title: 'Conference',
 			start: '2018-11-11',
 			end: '2018-11-13'
 		}, {
 			title: 'Meeting',
 			start: '2018-11-12T10:30:00',
 			end: '2018-11-12T12:30:00'
 		}, {
 			title: 'Lunch',
 			start: '2018-11-12T12:00:00'
 		}, {
 			title: 'Meeting',
 			start: '2018-11-12T14:30:00'
 		}, {
 			title: 'Happy Hour',
 			start: '2018-11-12T17:30:00'
 		}, {
 			title: 'Dinner',
 			start: '2018-11-12T20:00:00'
 		}, {
 			title: 'Birthday Party',
 			start: '2018-11-13T07:00:00'
 		}, {
 			title: 'Click for Google',
 			url: 'http://google.com/',
 			start: '2018-11-28'
 		}]
 	});
 	$('#calendar2').fullCalendar({
 		header: {
 			left: 'prev,next today',
 			center: 'title',
 			right: 'month,agendaWeek,agendaDay,listMonth'
 		},
 		defaultDate: '2018-03-12',
 		navLinks: true, // can click day/week names to navigate views
 		businessHours: true, // display business hours
 		editable: true,
 		events: [{
 				title: 'Business Lunch',
 				start: '2018-03-03T13:00:00',
 				constraint: 'businessHours'
 			}, {
 				title: 'Meeting',
 				start: '2018-03-13T11:00:00',
 				constraint: 'availableForMeeting', // defined below
 				color: '#257e4a'
 			}, {
 				title: 'Conference',
 				start: '2018-03-18',
 				end: '2018-03-20',
 				color: '#23dbcf '
 			}, {
 				title: 'Party',
 				start: '2018-03-29T20:00:00',
 				color: '#825ee4'
 			},
 			// areas where "Meeting" must be dropped
 			{
 				id: 'availableForMeeting',
 				start: '2018-03-11T10:00:00',
 				end: '2018-03-11T16:00:00',
 				rendering: 'background',
 				color: '#5e72e4'
 			}, {
 				id: 'availableForMeeting',
 				start: '2018-03-13T10:00:00',
 				end: '2018-03-13T16:00:00',
 				rendering: 'background'
 			},
 			// red areas where no events can be dropped
 			{
 				start: '2018-03-24',
 				end: '2018-03-28',
 				overlap: false,
 				rendering: 'background',
 				color: '#cbe0ff'
 			}, {
 				start: '2018-03-06',
 				end: '2018-03-11',
 				overlap: false,
 				rendering: 'background',
 				color: '#cbe0ff'
 			}
 		]
 	});
 	/* initialize the external events
 	-----------------------------------------------------------------*/
 	$('#external-events .fc-event').each(function() {
 		// store data so the calendar knows to render an event upon drop
 		$(this).data('event', {
 			title: $.trim($(this).text()), // use the element's text as the event title
 			stick: true // maintain when user navigates (see docs on the renderEvent method)
 		});
 		// make the event draggable using jQuery UI
 		$(this).draggable({
 			zIndex: 999,
 			revert: true, // will cause the event to go back to its
 			revertDuration: 0 //  original position after the drag
 		});
 	});
 	/* initialize the calendar
 	-----------------------------------------------------------------*/
 	$('#calendar3').fullCalendar({
 		header: {
 			left: 'prev,next today',
 			center: 'title',
 			right: 'month,agendaWeek,agendaDay'
 		},
 		editable: true,
 		droppable: true, // this allows things to be dropped onto the calendar
 		drop: function() {
 			// is the "remove after drop" checkbox checked?
 			if ($('#drop-remove').is(':checked')) {
 				// if so, remove the element from the "Draggable Events" list
 				$(this).remove();
 			}
 		}
 	});
});