$(document).ready(function() {

    document.getElementById("table1").addEventListener("load", UpdateTable);
    // document.getElementById("table").addEventListener("load", UpdateTable);

    function RandomNumber() {
        return Math.floor(Math.random() * 100);

    }

    function UpdateTable() {
        var table1 = new Array();
        var dataTable1 = [];
        for (var i = 0; i < 5; i++) {
            for (var j = 0; j < 5; j++) {
                tmp = 'cell' + i + j;
                random = RandomNumber();
                while (table1.indexOf(random) > -1) {
                    random = RandomNumber();
                }
                document.getElementById(tmp).innerHTML = random;
                table1.push(random);
                dataTable1.push({
                    value: random,
                    status: false,
                    cell: tmp,
                    card_id: $('#card_id').text(),
                });

            }
        }
        $.ajax({
            type: "get", //phuong thuc gui di 
            url: "/WebIntern/public/save", //duong dan toi file can lay va tra du lieu//nhu route
            data: {
                data: dataTable1, //truyen du lieu sang duong dan chi dinh o tren thuc hien xu li va tra ve du lieu 
            },
            success: function(data) { //ket qua tra ve thanh cong 
                console.log(data);
            }
        });

    }

    function oldTable() {


        $.ajax({
            type: "get",
            url: "/WebIntern/public/getDataCardDetail/" + $('#card_id').text(),
            success: function(cardDetails) {
                console.log(cardDetails);
                for (const cardDetail of cardDetails) {
                    if (cardDetail.status === "true") {
                        $('#' + cardDetail.cell).addClass('red-cell').text(cardDetail.value);
                    } else if (cardDetail.status === "false") {
                        $('#' + cardDetail.cell).removeClass('red-cell').text(cardDetail.value);
                    }
                }
            }
        });
    }


    if (document.URL.indexOf("new") > -1) {
        console.log("hello tao choi moi");

        UpdateTable();
    } else if (document.URL.indexOf("old") > -1) {
        oldTable();

    }

    // phần tạo hiệu ứng số 
    (function($) {
        $.fn.extend({ //$ đối tượng jquery
            numAnim: function(options) {
                if (!this.length)
                    return false;
                this.defaults = {
                    endAt: 2560,
                    numClass: 'autogen-num',
                    duration: 2, // seconds
                    interval: 90 // ms
                };
                var settings = $.extend({}, this.defaults, options);
                var $num = $('<span/>', {
                    'class': settings.numClass
                });
                return this.each(function() {
                    var $this = $(this);
                    // Wrap each number in a tag.
                    var frag = document.createDocumentFragment(),
                        numLen = settings.endAt.toString().length;
                    for (x = 0; x < numLen; x++) {
                        var rand_num = Math.floor(Math.random() * 10);
                        frag.appendChild($num.clone().text(rand_num)[0])
                    }
                    $this.empty().append(frag);
                    var get_next_num = function(num) {
                        ++num;
                        if (num > 9) return 0;
                        return num;
                    };
                    // Iterate each number.
                    $this.find('.' + settings.numClass).each(function() {
                        var $num = $(this),
                            num = parseInt($num.text());
                        var interval = setInterval(function() {
                            num = get_next_num(num);
                            $num.text(num);
                        }, settings.interval);
                        setTimeout(function() {
                            clearInterval(interval);
                        }, settings.duration * 1000 - settings.interval);
                    });

                    setTimeout(function() {
                        $this.text(settings.endAt.toString());
                        $("#mirageElement").css("display", "none");
                        $('#numCounter').css("display", "");
                    }, settings.duration * 1000);
                });
            }
        });
    })(jQuery);

    //  
    $(function() {
        var bingo = {
            selectedNumbers: [],
            generateRandom: function() {
                var min = 1;
                var max = 90;
                var random = Math.floor(Math.random() * (max - min + 1)) + min;
                return random;
            },
            generateNextRandom: function() {
                if (bingo.selectedNumbers.length > 89) {
                    alert("All numbers Exhausted");
                    return 0;
                }
                var random = bingo.generateRandom();
                while ($.inArray(random, bingo.selectedNumbers) > -1) {
                    random = bingo.generateRandom();
                }
                bingo.selectedNumbers.push(random);
                return random;
            }
        };
        $("#mirageElement").css("display", "none");
        $('#table2 td').each(function() {
            var concatClass = this.cellIndex + "" + this.parentNode.rowIndex;
            var numberString = parseInt(concatClass, 10).toString();
            $(this).addClass("cell" + numberString).text(numberString);
        });
        var random = 0;
        var animDuration = 2;
        $('#btn').click(function() {

            random = bingo.generateNextRandom().toString();
            $('#numCounter').text(random);
            $('td.cell' + random).addClass('selected');
            $("#numCounter").css("display", "none");
            $("#mirageElement").css("display", "");
            $("#mirageElement").numAnim({
                endAt: 90,
                duration: animDuration
            });

        });

    });

    $('td').click(function() {
        $(this).toggleClass("red-cell");

    });


});