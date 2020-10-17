$(function() {
    "use strict";
    // Dashboard 1 Morris-chart
    Morris.Bar({
        element: 'morris-area-chart',
        data: [
        {
            name: document.getElementById('n1').value,
            trainees: document.getElementById('t1').value,
            income: document.getElementById('i1').value,
        }, {
            name: document.getElementById('n2').value,
            trainees: document.getElementById('t2').value,
            income: document.getElementById('i2').value,
        }, {
            name: document.getElementById('n3').value,
            trainees: document.getElementById('t3').value,
            income: document.getElementById('i3').value,
        }, {
            name: document.getElementById('n4').value,
            trainees: document.getElementById('t4').value,
            income: document.getElementById('i4').value,
        }],
        xkey: 'name',
        ykeys: ['trainees', 'income'],
        labels: ['Trainees', 'Income'],
        pointSize: 0,
        fillOpacity: 0,
        pointStrokeColors: ['#f2f2f2', '#f2f2f2', '#009efb'],
        behaveLikeLine: true,
        gridLineColor: '#a6a6a6',
        lineWidth: 1,
        hideHover: 'auto',
        lineColors: ['red', 'red', 'red'],
        resize: true
    });

});