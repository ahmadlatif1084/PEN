

        $(function() {


            $('#TeacherContent').on('change', function() {
            $(".Teacher-Content").css("display", "none");
            switch (this.value) {
                        case 'Lessons Content Planning':
                        $(".Lesson-Content").css("display", "block");
                        break;
                        case 'Lessons Content Delivery':
                       $(".Lesson-Delivery").css("display", "block");
                        break;
                        case 'Lessons Content Review':
                         $(".Lesson-Review").css("display", "block");
                        break;
                        case 'Lessons Content Assessment':
                        $(".Lesson-Assessment").css("display", "block");     
                        break;
                        case 'Class Management':
                        $(".Lesson-Management").css("display", "block");
                        break;
                        case 'Working Relationships':
                        $(".Lesson-Relationships").css("display", "block");   
                        break;
                        case 'Documentation':
                         $(".Lesson-Documentation").css("display", "block");  
                        break;   
                         case 'Proffesional Knowledge and Personal Traits':
                           $(".Lesson-Traits").css("display", "block");       
                        break;                      
                }
               $('input:checkbox').each(function() {
                    this.checked = false;
                    });
            });

 
            $( "#add-school-infa" ).click(function() {
                var status = $("#status").val(),quantity=$("#Quantity").val(),head=$("#head").val();
                var status_new=status,quantity_new=quantity,head_new=head;
                if (status) {
                var table = document.getElementById("myTable");
                var row = table.insertRow();
                row.id=head_new;
                var head = row.insertCell(0);
                var quantity = row.insertCell(1);
                var status = row.insertCell(2);
                 var action=row.insertCell(3);
                head.innerHTML = head_new;
                quantity.innerHTML = quantity_new;
                status.innerHTML = status_new;
                $("#head option[value='" + head_new + "']").remove();
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteschooldetails(' + row.id +');">Delete</button>';
                return false;
                 
                }
                else {
                  alert("Missing Information");
                  return false;
                  
                }    
            });



              $( "#add-school-details" ).click(function() {
                var Students = $("#Students").val(),PrincipalOffice=$("#PrincipalOffice").val(),StaffRoom=$("#StaffRoom").val(),Lab=$("#Lab").val(),Library=$("#Library").val(),head2=$("#head2").val();
                var Students_new=Students,PrincipalOffice_new=PrincipalOffice,StaffRoom_new=StaffRoom,Lab=Lab,Library=Library,head2_new=head2;
                if (Students) {
                var table = document.getElementById("myTable2");
                var row = table.insertRow();
                 row.id=head2_new;
                var head = row.insertCell(0);
                var students = row.insertCell(1);
                var principaloffice = row.insertCell(2);
                var staffroom = row.insertCell(3);
                var lab = row.insertCell(4);
                var library = row.insertCell(5);
                var action=row.insertCell(6);
                head.innerHTML = head2_new;
                students.innerHTML = Students_new;
                principaloffice.innerHTML = PrincipalOffice_new;
                staffroom.innerHTML = StaffRoom_new;
                lab.innerHTML = Lab;
                library.innerHTML = Library;
                $("#head2 option[value='" + head2_new + "']").remove();
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteschooldetails(' + row.id +');">Delete</button>';
                return false;
                 
                }
                else {
                  alert("Missing Information");
                  return false;
                  
                }    
            });



                $( "#add-school-enroll" ).click(function() {
                var Nursery = $("#Nursery").val(),Prep=$("#Prep").val(),Class1=$("#Class1").val(),Class2=$("#Class2").val(),Class3=$("#Class3").val(),Class4=$("#Class4").val(),Class5=$("#Class5").val(),Total=$("#Total").val(),
                Class=$("#Class").val();
                var Nursery_new=Nursery,Prep_new=Prep,Class1_new=Class1,Class2_new=Class2,Class3_new=Class3,Class4_new=Class4,Class5_new=Class5,Class_new=Class,Total_new=Total;
                if (Nursery) {
                var table = document.getElementById("myTable3");
                var row = table.insertRow();
                 row.id=Class_new;
                var class_data = row.insertCell(0);
                var nursery = row.insertCell(1);
                var prep = row.insertCell(2);
                var class1 = row.insertCell(3);
                var class2 = row.insertCell(4);
                var class3 = row.insertCell(5);
                var class4 = row.insertCell(6);
                var class5 = row.insertCell(7);
                var total = row.insertCell(8);
                var action=row.insertCell(9);
                class_data.innerHTML = Class_new;
                nursery.innerHTML = Nursery_new;
                prep.innerHTML = Prep_new;
                class1.innerHTML = Class1_new;
                class2.innerHTML = Class2_new;
                class3.innerHTML = Class3_new;
                class4.innerHTML = Class4_new;
                class5.innerHTML = Class5_new;
                total.innerHTML = Total_new;
                 action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteutility(' + row.id +');">Delete</button>';
                $("#Class option[value='" + Class_new + "']").remove();
                return false;
                 
                }
                else {
                  alert("Missing Information");
                  return false;
                  
                }    
            });



              

               $( "#add-school-utility" ).click(function() {
                var source = $("#source").val(),Functional=$("#Functional").val(),ChargesPaid=$("#ChargesPaid").val();
                var source_new=source,Functional_new=Functional,ChargesPaid_new=ChargesPaid;
                if (source) {
                var table = document.getElementById("myTable5");
                var row = table.insertRow();
                row.id=source_new;
                var data = row.insertCell(0);
                var functional = row.insertCell(1);
                var chargesPaid = row.insertCell(2);
                var action=row.insertCell(3);
                data.innerHTML = source_new;
                functional.innerHTML = Functional_new;
                chargesPaid.innerHTML = ChargesPaid_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteutility(' + row.id +');">Delete</button>';
                $("#source option[value='" + source_new + "']").remove();
                return false;                
                }
                else {
                  alert("Missing Information");
                  return false;
                  
                } 


            });


                $( "#add-school-details" ).click(function() {
                var Students = $("#Students").val(),PrincipalOffice=$("#PrincipalOffice").val(),StaffRoom=$("#StaffRoom").val(),Lab=$("#Lab").val(),Library=$("#Library").val(),head2=$("#head2").val();
                var Students_new=Students,PrincipalOffice_new=PrincipalOffice,StaffRoom_new=StaffRoom,Lab=Lab,Library=Library,head2_new=head2;
                if (Students) {
                var table = document.getElementById("myTable2");
                var row = table.insertRow();
                 row.id=head2_new;
                var head = row.insertCell(0);
                var students = row.insertCell(1);
                var principaloffice = row.insertCell(2);
                var staffroom = row.insertCell(3);
                var lab = row.insertCell(4);
                var library = row.insertCell(5);
                var action=row.insertCell(6);
                head.innerHTML = head2_new;
                students.innerHTML = Students_new;
                principaloffice.innerHTML = PrincipalOffice_new;
                staffroom.innerHTML = StaffRoom_new;
                lab.innerHTML = Lab;
                library.innerHTML = Library;
                $("#head2 option[value='" + head2_new + "']").remove();
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteschooldetails(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });



                $( "#teacher1" ).click(function() {
                var TeacherName = $("#TeacherName").val(),TeacherQualification=$("#TeacherQualification").val();
                var TeacherName_new=TeacherName,TeacherQualification_new=TeacherQualification;
                if (TeacherName) {
                var table = document.getElementById("teacher");
                var row = table.insertRow();
                row.id=TeacherName_new;
                var teacher = row.insertCell(0);
                var qualification = row.insertCell(1);
                var action=row.insertCell(2);
                teacher.innerHTML = TeacherName_new;
                qualification.innerHTML = TeacherQualification_new;
                 action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteteacher(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });




                $("#add-professional").click(function() {
                var ProfessionalTeacherName = $("#ProfessionalTeacherName").val(),ProfessionalObservation = $("#ProfessionalObservation").val(),ProfessionalObservation1 = $("#ProfessionalObservation1").val();
                var ProfessionalTeacherName_new=ProfessionalTeacherName,ProfessionalObservation_new=ProfessionalObservation,ProfessionalObservation1_new=ProfessionalObservation1;
                if (ProfessionalObservation1) {
                var table = document.getElementById("professional");
                var row = table.insertRow();
                row.id=ProfessionalTeacherName_new;
                var observation = row.insertCell(0);
                var teacher=row.insertCell(1);
                var observation1 = row.insertCell(2);
                 var action=row.insertCell(3);
                observation.innerHTML = ProfessionalObservation_new;
                 teacher.innerHTML = ProfessionalTeacherName_new;
                observation1.innerHTML = ProfessionalObservation1_new;
               action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteproffessional(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });




                $("#add-documentation").click(function() {
                var DocumentationTeacherName = $("#DocumentationTeacherName").val(),DocumentationObservation = $("#DocumentationObservation").val(),DocumentationObservation1 = $("#DocumentationObservation1").val();
                var DocumentationTeacherName_new=DocumentationTeacherName,DocumentationObservation_new=DocumentationObservation,DocumentationObservation1_new=DocumentationObservation1;
                if (DocumentationObservation1) {
                var table = document.getElementById("documentation");
                var row = table.insertRow();
                row.id = DocumentationTeacherName_new;
                var observation = row.insertCell(0);
                var teacher=row.insertCell(1);
                var observation1 = row.insertCell(2);
                var action=row.insertCell(3);
                observation.innerHTML = DocumentationObservation_new;
                 teacher.innerHTML = DocumentationTeacherName_new;
                observation1.innerHTML = DocumentationObservation1_new;
                    action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deletedocumentation(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });



               $("#add-working").click(function() {
                var WorkingTeacherName = $("#WorkingTeacherName").val(),WorkingObservation = $("#WorkingObservation").val(),WorkingObservation1 = $("#WorkingObservation1").val();
                var WorkingTeacherName_new=WorkingTeacherName,WorkingObservation_new=WorkingObservation,WorkingObservation1_new=WorkingObservation1;
                if (WorkingObservation1) {
                var table = document.getElementById("working");
                var row = table.insertRow();
                 row.id = WorkingTeacherName_new;
                var observation = row.insertCell(0);
                var teacher=row.insertCell(1);
                var observation1 = row.insertCell(2);
                var action=row.insertCell(3);
                observation.innerHTML =  WorkingObservation_new;
                teacher.innerHTML = WorkingTeacherName_new;
                observation1.innerHTML = WorkingObservation1_new;
                       action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteworking(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });




                $("#add-management").click(function() {

                var ManagementTeacherName = $("#ManagementTeacherName").val(),ManagementObservation = $("#ManagementObservation").val(),ManagementObservation1 = $("#ManagementObservation1").val();
                var ManagementTeacherName_new=ManagementTeacherName,ManagementObservation_new=ManagementObservation,ManagementObservation1_new=ManagementObservation1;
                if (ManagementObservation1) {
                var table = document.getElementById("management");
                var row = table.insertRow();
                 row.id = ManagementTeacherName_new;
                var observation = row.insertCell(0);
                var teacher=row.insertCell(1);
                var observation1 = row.insertCell(2);
                var action=row.insertCell(3);
                observation.innerHTML = ManagementObservation_new;
                teacher.innerHTML = ManagementTeacherName_new;
                observation1.innerHTML = ManagementObservation1_new;
                       action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deletemanagement(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });



             $("#add-assessment").click(function() {
                var   AssessmentTeacherName = $("#AssessmentTeacherName").val(),AssessmentObservation = $("#AssessmentObservation").val(),AssessmentObservation1 = $("#AssessmentObservation1").val();
                var AssessmentTeacherName_new=AssessmentTeacherName,AssessmentObservation_new=AssessmentObservation,AssessmentObservation1_new=AssessmentObservation1;
                if (AssessmentObservation1) {
                var table = document.getElementById("assessment");
                var row = table.insertRow();
                row.id = AssessmentTeacherName_new;
                var observation = row.insertCell(0);
                var teacher=row.insertCell(1);
                var observation1 = row.insertCell(2);
                 var action=row.insertCell(3);
                observation.innerHTML = AssessmentObservation_new;
                teacher.innerHTML = AssessmentTeacherName_new;
                observation1.innerHTML = AssessmentObservation1_new;
                  action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteassessment(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });



                $("#review1").click(function() {                  
                var ReviewTeacherName=$("#ReviewTeacherName").val(),ReviewObservation = $("#ReviewObservation").val(),ReviewObservation1 = $("#ReviewObservation1").val();

                var ReviewTeacherName_new=ReviewTeacherName,ReviewObservation_new=ReviewObservation,ReviewObservation1_new=ReviewObservation1;
                if (AssessmentObservation1) {
                var table = document.getElementById("review");
                var row = table.insertRow();
                row.id = ReviewTeacherName_new;
                var observation = row.insertCell(0);
                var teacher=row.insertCell(1);
                var observation1 = row.insertCell(2);
                var action=row.insertCell(3);
                observation.innerHTML = ReviewObservation_new;
                teacher.innerHTML = ReviewTeacherName_new;
                observation1.innerHTML = ReviewObservation1_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deletereview(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });
                


                $("#delivery1").click(function() {                  
                var DeliveryTeacherName=$("#DeliveryTeacherName").val(),DeliveryObservation = $("#DeliveryObservation").val(),DeliveryObservation1 = $("#DeliveryObservation1").val();

                var DeliveryTeacherName_new=DeliveryTeacherName,DeliveryObservation_new=DeliveryObservation,DeliveryObservation1_new=DeliveryObservation1;
                if (DeliveryObservation1) {
                var table = document.getElementById("delivery");
                var row = table.insertRow();
                 row.id = DeliveryTeacherName_new;
                var observation = row.insertCell(0);
                 var teacher=row.insertCell(1);
                var observation1 = row.insertCell(2);
                var action=row.insertCell(3);
                observation.innerHTML = DeliveryObservation;
                teacher.innerHTML = DeliveryTeacherName_new;
                observation1.innerHTML = DeliveryObservation1_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deletedelivery(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });



                   $("#planning1").click(function() {                  
                var PlanningTeacherName=$("#PlanningTeacherName").val(),PlanningObservation = $("#PlanningObservation").val(),PlanningObservation1 = $("#PlanningObservation1").val();

                var PlanningTeacherName_new=PlanningTeacherName,PlanningObservation_new=PlanningObservation,PlanningObservation1_new=PlanningObservation1;
                if (PlanningObservation1) {
                var table = document.getElementById("planning");
                var row = table.insertRow();
                row.id = PlanningTeacherName_new;
                var observation = row.insertCell(0);
                var teacher=row.insertCell(1);
                var scale = row.insertCell(2);
                var action=row.insertCell(3);
                observation.innerHTML = PlanningObservation_new;
                teacher.innerHTML = PlanningTeacherName_new;
                scale.innerHTML = PlanningObservation1_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteplanning(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });

                $("#add-student-strenght").click(function() { 

                var MonitoringClass=$("#MonitoringClass").val(),MonitoringBoys = $("#MonitoringBoys").val(),MonitoringGirls = $("#MonitoringGirls").val(),MonitoringTotal=$("#MonitoringTotal").val();


                var MonitoringClass_new=MonitoringClass,MonitoringBoys_new=MonitoringBoys,MonitoringGirls_new=MonitoringGirls,MonitoringTotal_new=MonitoringTotal;

                if (MonitoringClass_new) {
                var table = document.getElementById("add-student-strengh1");
                //     alert('true');
                // return false;   
                var row = table.insertRow();
                row.id = MonitoringClass_new;
                var classinner = row.insertCell(0);
                var boys=row.insertCell(1);
                var girls = row.insertCell(2);
                var total = row.insertCell(3);
                var action=row.insertCell(4);
                 $("#MonitoringClass option[value='" + row.id + "']").remove();
                classinner.innerHTML = MonitoringClass_new;
                boys.innerHTML = MonitoringBoys_new;
                girls.innerHTML = MonitoringGirls_new;
                total.innerHTML = MonitoringTotal_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deletemonitoringstrenght(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });


                 $("#add-infa-structure").click(function() { 

                var MonitoringIndicator=$("#MonitoringIndicator").val(),MonitoringWorking = $("#MonitoringWorking").val(),MonitoringPolicy = $("#MonitoringPolicy").val(),MonitoringInfaRemarks=$("#MonitoringInfaRemarks").val();


                var MonitoringIndicator_new=MonitoringIndicator,MonitoringWorking_new=MonitoringWorking,MonitoringPolicy_new=MonitoringPolicy,MonitoringInfaRemarks_new=MonitoringInfaRemarks;

                if (MonitoringIndicator) {
                var table = document.getElementById("add-infa-structure1");
                var row = table.insertRow();
                row.id = MonitoringIndicator_new;
                var indicator = row.insertCell(0);
                var working=row.insertCell(1);
                var policy = row.insertCell(2);
                var remarks = row.insertCell(3);
                var action=row.insertCell(4);
                 $("#MonitoringIndicator option[value='" + row.id + "']").remove();
                indicator.innerHTML = MonitoringIndicator_new;
                working.innerHTML = MonitoringWorking_new;
                policy.innerHTML = MonitoringPolicy_new;
                remarks.innerHTML = MonitoringInfaRemarks_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteinfastatus(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });



                $("#add-monitoring-cleanliness").click(function() { 

                var CleanlinessArea=$("#CleanlinessArea").val(),CleanlinessStatus = $("#CleanlinessStatus").val(),CleanlinessRemarks = $("#CleanlinessRemarks").val();
                  

                var CleanlinessArea_new=CleanlinessArea,CleanlinessStatus_new=CleanlinessStatus,CleanlinessRemarks_new=CleanlinessRemarks;

                if (CleanlinessArea_new) {
                var table = document.getElementById("add-monitoring-cleanliness1");
                var row = table.insertRow();
                var len = CleanlinessArea_new.replace(/ +/g, "");
                row.id = len;
                var area = row.insertCell(0);
                var status=row.insertCell(1);
                var remarks = row.insertCell(2);
                var action=row.insertCell(3);
                 $("#CleanlinessArea option[value='" + CleanlinessArea_new + "']").remove();
                area.innerHTML = CleanlinessArea_new;
                status.innerHTML = CleanlinessStatus_new;
                remarks.innerHTML = CleanlinessRemarks_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deletecleaneness('+ row.id + ');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });


                  $("#add-monitoring-activities").click(function() { 

                var ActivitiesClass=$("#ActivitiesClass").val(),ActivitiesUrdu = $("#ActivitiesUrdu").val(),ActivitiesEnglish = $("#ActivitiesEnglish").val(),ActivitiesNumeric = $("#ActivitiesNumeric").val(),ActivitiesScience = $("#ActivitiesScience").val(),ActivitiesGeneralKnowledge = $("#ActivitiesGeneralKnowledge").val(),ActivitiesSocial = $("#ActivitiesSocial").val(),ActivitiesCopy = $("#ActivitiesCopy").val(),ActivitiesOther = $("#ActivitiesOther").val();
                  

                var ActivitiesClass_new=ActivitiesClass,ActivitiesUrdu_new=ActivitiesUrdu,ActivitiesEnglish_new=ActivitiesEnglish,ActivitiesNumeric_new=ActivitiesNumeric,ActivitiesScience_new=ActivitiesScience,ActivitiesGeneralKnowledge_new=ActivitiesGeneralKnowledge,ActivitiesSocial_new=ActivitiesSocial,ActivitiesCopy_new=ActivitiesCopy_new,ActivitiesOther_new=ActivitiesOther;

                if (ActivitiesClass_new) {
                var table = document.getElementById("add-monitoring-activities1");
                var row = table.insertRow();
                row.id = ActivitiesClass_new;
                var class_new = row.insertCell(0);
                var urdu=row.insertCell(1);
                var english = row.insertCell(2);
                var numeric = row.insertCell(3);
                var science = row.insertCell(4);
                var general = row.insertCell(5);
                var social = row.insertCell(6);
                var copy = row.insertCell(7);
                var other = row.insertCell(8);
                var action=row.insertCell(9);
                 $("#ActivitiesClass option[value='" + ActivitiesClass_new + "']").remove();
                class_new.innerHTML = ActivitiesClass_new;
                urdu.innerHTML = ActivitiesUrdu_new;
                english.innerHTML = ActivitiesEnglish_new;
                numeric.innerHTML = ActivitiesNumeric_new;
                science.innerHTML = ActivitiesScience_new;
                general.innerHTML = ActivitiesGeneralKnowledge_new;
                social.innerHTML = ActivitiesSocial_new;
                copy.innerHTML = ActivitiesCopy_new;
                other.innerHTML = ActivitiesOther_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteactivityperform('+ row.id + ');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });



                $("#add-curricular-activities").click(function() { 

                var CurricularActivitiesClass=$("#CurricularActivitiesClass").val(),ActivitiesSports = $("#ActivitiesSports").val(),ActivitiesQuiz = $("#ActivitiesQuiz").val(),ActivitiesNaat = $("#ActivitiesNaat").val(),ActivitiesPoem = $("#ActivitiesPoem").val(),StoryTelling = $("#StoryTelling").val(),ArtandCraft = $("#ArtandCraft").val(),CreativeWriting = $("#CreativeWriting").val(),CocurricularOthers = $("#CocurricularOthers").val();
                  

                var CurricularActivitiesClass_new=CurricularActivitiesClass,ActivitiesSports_new=ActivitiesSports,ActivitiesQuiz_new=ActivitiesQuiz,ActivitiesNaat_new=ActivitiesNaat,ActivitiesPoem_new=ActivitiesPoem,StoryTelling_new=StoryTelling,ArtandCraft_new=ArtandCraft,CreativeWriting_new=CreativeWriting,CocurricularOthers_new=CocurricularOthers;

                if (CurricularActivitiesClass_new) {
                var table = document.getElementById("add-curricular-activities1");
                var row = table.insertRow();
                row.id = CurricularActivitiesClass_new;
                var class_new = row.insertCell(0);
                var sports=row.insertCell(1);
                var quiz = row.insertCell(2);
                var naat = row.insertCell(3);
                var poem = row.insertCell(4);
                var storytelling = row.insertCell(5);
                var artcraft = row.insertCell(6);
                var creatinewritting = row.insertCell(7);
                var other = row.insertCell(8);
                var action=row.insertCell(9);
                 $("#CurricularActivitiesClass option[value='" + CurricularActivitiesClass_new + "']").remove();
                class_new.innerHTML = CurricularActivitiesClass_new;
                sports.innerHTML = ActivitiesSports_new;
                quiz.innerHTML = ActivitiesQuiz_new;
                naat.innerHTML = ActivitiesNaat_new;
                poem.innerHTML = ActivitiesPoem_new;
                storytelling.innerHTML = StoryTelling_new;
                artcraft.innerHTML = ArtandCraft_new;
                creatinewritting.innerHTML = CreativeWriting_new;
                other.innerHTML = CocurricularOthers_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deletecurricularactivity('+ row.id + ');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                }); 


                   $("#add-staff-details").click(function() { 

                var StaffNames=$("#StaffNames").val(),StaffQualification = $("#StaffQualification").val(),StaffDesignation = $("#StaffDesignation").val(),StaffCNIC=$("#StaffCNIC").val(),StaffContact = $("#StaffContact").val(),StaffClass=$("#StaffClass").val(),StaffPhoto=$("#StaffPhoto").val();


                var StaffNames_new=StaffNames,StaffQualification_new=StaffQualification,StaffDesignation_new=StaffDesignation,StaffCNIC_new=StaffCNIC,StaffContact_new=StaffContact,StaffClass_new=StaffClass,StaffPhoto_new=StaffPhoto;

                if (StaffNames_new) {
                var table = document.getElementById("add-staff-strengh1");
                //     alert('true');
                // return false;   
                var row = table.insertRow();
                row.id = StaffCNIC_new;
                var names = row.insertCell(0);
                var qualification=row.insertCell(1);
                var designation = row.insertCell(2);
                var cnic = row.insertCell(3);
                var contact = row.insertCell(4);
                var class_new = row.insertCell(5);
                var photo = row.insertCell(6);
                var action=row.insertCell(7);
                names.innerHTML = StaffNames_new;
                qualification.innerHTML = StaffQualification_new;
                designation.innerHTML = StaffDesignation_new;
                cnic.innerHTML = StaffCNIC_new;
                contact.innerHTML = StaffContact_new;
                class_new.innerHTML = StaffClass_new;
                photo.innerHTML = StaffPhoto_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deletestaffdetails(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });



                $("#add-teacher-activities").click(function() { 
                    var main=$('#TeacherContent')[0].value;
                   var n=$( "input:checked"),i,string=[];
                 for (i = 0; i < n.length; i++) {
                       if(n[i].value){
                        string.push(n[i].value);
                       }
                        
                    }

                var TeacherName=$("#TeacherName").val(),TeacherClassObserved = $("#TeacherClassObserved").val(),TeacherSubject = $("#TeacherSubject").val(),TeacherTopic=$("#TeacherTopic").val(),TeacherContent = $("#TeacherContent").val(),TeacherTags=$("#TeacherTags").val(),TeacherRemarks=$("#TeacherRemarks").val();


                var TeacherName_new=TeacherName,TeacherClassObserved_new=TeacherClassObserved,TeacherSubject_new=TeacherSubject,TeacherTopic_new=TeacherTopic,TeacherContent_new=TeacherContent,TeacherTags_new=TeacherTags,TeacherRemarks_new=TeacherRemarks;

                if (TeacherName_new) {
                var table = document.getElementById("add-teacher-activities1");  
                var row = table.insertRow();
                row.id = TeacherName_new;


                var names = row.insertCell(0);

                var class_new=row.insertCell(1);
                var subject = row.insertCell(2);
                var topic = row.insertCell(3);

                var contentt = row.insertCell(4);
                var tags = row.insertCell(5);
                var remarks = row.insertCell(6);
                //                        console.log('row.id' + row.id);
                // return false;
                var action=row.insertCell(7);
  
                names.innerHTML = TeacherName_new;

                class_new.innerHTML = TeacherClassObserved_new;
                subject.innerHTML = TeacherSubject_new;
                topic.innerHTML = TeacherTopic_new;
                contentt.innerHTML = TeacherContent_new;
                tags.innerHTML = string.join();
                remarks.innerHTML = TeacherRemarks_new;
                action.innerHTML = '<button class="btn btn-primary btn-md" onclick="return deleteteacherdetails(' + row.id +');">Delete</button>';
                return false;
                 
                }
                    else {
                      alert("Missing Information");
                      return false;
                      
                    }    
                });

       });

               
                 function deletestaffdetails(type){                
                    if(typeof type == "number"){
                         $('#add-staff-strengh1 tr#'+ type + '').remove();
                    }
                      // console.log(type);
                     $('#add-staff-strengh1 tr#'+ type.id + '').remove();
                    return false;
                }

                 function deleteproffessional(type){
                     $('#professional tr#'+ type.id + '').remove();
                    return false;
                }

                  function deletedocumentation(type){
                     $('#documentation tr#'+ type.id + '').remove();
                    return false;
                }
                
                  function deleteworking(type){
                     $('#working tr#'+ type.id + '').remove();
                    return false;
                }
                
                  function deletemanagement(type){
                     $('#management tr#'+ type.id + '').remove();
                    return false;
                }
                
                  function deleteassessment(type){
                     $('#assessment tr#'+ type.id + '').remove();
                    return false;
                }
                
                   function deletereview(type){
                     $('#review tr#'+ type.id + '').remove();
                    return false;
                }
                
                   function deletedelivery(type){
                     $('#delivery tr#'+ type.id + '').remove();
                    return false;
                }

                 function deleteplanning(type){
                     $('#planning tr#'+ type.id + '').remove();
                    return false;
                }
            
            
            
                function deleteteacher(teacher){
                    $('#teacher tr#'+ teacher.id + '').remove();
                    return false;
                }

                function deleteactivityperform(source_id){
                       $('#add-monitoring-activities1 tr#'+ source_id.id + '').remove();
                                    $('#ActivitiesClass')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;        
                }
                function deleteteacherdetails(source_id){
                     $('#add-teacher-activities1 tr#'+ source_id.id + '').remove();
                                   return false;           
                }
               function deleteschool(source_id) {
                                   alert('i hit');
                                   return false;
                                   $('#myTable5 tr#'+ source_id.id + '').remove();
                                    $('#source')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;           // The function returns the product of p1 and p2
                }

                    
                
                 function deletecurricularactivity(source_id){

                     if(typeof source_id == "number"){
                        
                        $('#add-curricular-activities1 tr#'+ source_id + '').remove();
                                    $('#CurricularActivitiesClass')
                                     .append($("<option></option>")
                                                .attr("value",source_id)
                                                .text(source_id.id)); 
                                   return false;       
                    }
                    else{
                    $('#add-curricular-activities1 tr#'+ source_id.id + '').remove();
                                    $('#CurricularActivitiesClass')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;
                       }                     
                 }   
                function deleteinfastatus(source_id){

                      $('#add-monitoring-cleanliness1 tr#'+ source_id.id + '').remove();
                                    $('#CleanlinessArea')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;           // The function returns the product of p1 and p2
              

                }


                 function deletecleaneness(source_id){
                        $('#add-monitoring-cleanliness1 tr#'+ source_id.id + '').remove();
                                    $('#CleanlinessArea')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;           // The function returns the product of p1 and p2
              
                }
                





 
                  function deleteutility(source_id) {
                     alert('i hit');
                                   return false;
                                   
                                   $('#myTable5 tr#'+ source_id.id + '').remove();
                                    $('#source')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;           // The function returns the product of p1 and p2
                }


                 function deleteenroll(source_id) {
                                   
                                   $('#myTable3 tr#'+ source_id.id + '').remove();
                                    $('#Class')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;           // The function returns the product of p1 and p2
                }

                   function deleteschooldetails(source_id) {
                                   
                                   $('#myTable2 tr#'+ source_id.id + '').remove();
                                    $('#head2')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;           // The function returns the product of p1 and p2
                }

                  function deletemonitoringstrenght(source_id){


                                   $('#add-student-strengh1 tr#'+ source_id.id + '').remove();
                                    $('#MonitoringClass')
                                     .append($("<option></option>")
                                                .attr("value",source_id.id)
                                                .text(source_id.id)); 
                                   return false;           // The function returns the product of p1 and p2

                  }  

                   
