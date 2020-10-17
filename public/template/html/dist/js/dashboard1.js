$(function() {
    "use strict";
    // Dashboard 1 Morris-chart
    Morris.Bar({
        element: 'morris-area-chart',
        data: [
        {
            name: 'A',
            trainees: document.getElementById('test3trainees').value,
            income: document.getElementById('test3income').value,
        }, {
            name: 'B',
            trainees: 130,
            income: 100,
        }, {
            name: 'C',
            trainees: 80,
            income: 60,
        }, {
            name: 'D',
            trainees: 70,
            income: 200,
        }, {
            name: 'E',
            trainees: 180,
            income: 150,
        }],
        xkey: 'name',
        ykeys: ['trainees', 'income'],
        labels: ['trainees', 'income'],
        pointSize: 0,
        fillOpacity: 0,
        pointStrokeColors: ['#f2f2f2', '#f2f2f2', '#009efb'],
        behaveLikeLine: true,
        gridLineColor: '#f6f6f6',
        lineWidth: 1,
        hideHover: 'auto',
        lineColors: ['red', 'red', 'red'],
        resize: true
    });

});