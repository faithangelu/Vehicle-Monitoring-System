 $(document).ready(function(){
    
        //1st
        $("#1[]").click(function(){
            var msg = "Vehicle now on warehouse.";
            var data = { 
                'date': $("#d").val() 
            
            };
            alert(msg);
            $.ajax({
			    type: "POST",
			    url: "module/js/home_js.php",
			    data: data, 
			    dataType: "html",
			    success: function(result){
			        console.log(result);
	           		$("#bar").css({"width": "20%", "background-color" : "red"});
                    $('#bar').text("20% Complete");
                    $('.status').text(msg);
                    $("#1").hide();
                    $('#2').removeAttr('disabled');
                    //2nd
                        	$("#2").click(function(){
                                var msg1 = "Vehicle loaded.";
                                var data = { 
                                    'date': $("#d").val() 
                                    
                                };
                                alert(msg1);
                                $.ajax({
                    			    type: "POST",
                    			    url: "module/js/home_js.php",
                    			    data: data, 
                    			    dataType: "html",
                    			    success: function(result){
                    			        console.log(result);
                    	           		$("#bar").css({"width": "40%", "background-color" : "blue"});
                                        $('#bar').text("40% Complete");
                                        $('.status').text(msg1);
                                        $("#2").hide();
                                        $('#3').removeAttr('disabled');
                                        //3rd
                                            	$("#3").click(function(){
                                                    var msg2 = "On the way to customer.";
                                                    var data = { 
                                                        'date': $("#d").val() 
                                                        
                                                    };
                                                    alert(msg2);
                                                    $.ajax({
                                        			    type: "POST",
                                        			    url: "module/js/home_js.php",
                                        			    data: data, 
                                        			    dataType: "html",
                                        			    success: function(result){
                                        			        console.log(result);
                                        	           		$("#bar").css({"width": "60%", "background-color" : "orange"});
                                                            $('#bar').text("60% Complete");
                                                            $('.status').text(msg2);
                                                            $("#3").hide();
                                                            $('#4').removeAttr('disabled');
                                                            //4th
                                                                    $("#4").click(function(){
                                                                        var msg3 = "Unloaded.";
                                                                        var data = { 
                                                                            'date': $("#d").val() 
                                                                            
                                                                        };
                                                                        alert(msg3);
                                                                        $.ajax({
                                                            			    type: "POST",
                                                            			    url: "module/js/home_js.php",
                                                            			    data: data, 
                                                            			    dataType: "html",
                                                            			    success: function(result){
                                                            			        console.log(result);
                                                            	           		$("#bar").css({"width": "80%", "background-color" : "green"});
                                                                                $('#bar').text("80% Complete");
                                                                                $('.status').text(msg3);
                                                                                $("#4").hide();
                                                                                $('#5').removeAttr('disabled');
                                                                                //5th
                                                                                        $("#5").click(function(){
                                                                                            var msg4 = "On the way to garage.";
                                                                                            var data = { 
                                                                                                'date': $("#d").val() 
                                                                                                
                                                                                            };
                                                                                            alert(msg4);
                                                                                            $.ajax({
                                                                                			    type: "POST",
                                                                                			    url: "module/js/home_js.php",
                                                                                			    data: data, 
                                                                                			    dataType: "html",
                                                                                			    success: function(result){
                                                                                			        console.log(result);
                                                                                	           		$("#bar").css({"width": "90%", "background-color" : "gray"});
                                                                                                    $('#bar').text("90% Complete");
                                                                                                    $('.status').text(msg4);
                                                                                                    $("#5").hide();
                                                                                                    $('#6').removeAttr('disabled');
                                                                                                    //6th
                                                                                                            $("#6").click(function(){
                                                                                                                var msg5 = "End time.";
                                                                                                                var data = { 
                                                                                                                    'date': $("#d").val() 
                                                                                                                    
                                                                                                                };
                                                                                                                alert(msg5);
                                                                                                                $.ajax({
                                                                                                    			    type: "POST",
                                                                                                    			    url: "module/js/home_js.php",
                                                                                                    			    data: data, 
                                                                                                    			    dataType: "html",
                                                                                                    			    success: function(result){
                                                                                                    	           		$("#bar").css({"width": "100%", "background-color" : "dark-yellow"});
                                                                                                                        $('#bar').text("100% Complete");
                                                                                                                        $('.status').text(msg5);
                                                                                                                        $("#6").hide();
                                                                                                                	}
                                                                                                                });	
                                                                                                            });             
                                                                                            	}
                                                                                            });	
                                                                                        });             
                                                                        	}
                                                                        });	
                                                                    });     
                                                    	}
                                                    });	
                                                });    
                                	}
                                });	
                            });    
                }
            })    
        });
    });