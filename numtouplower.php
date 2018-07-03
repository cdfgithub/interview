   <?php
   //面试题 给出一个数字，以中文的形式输出




        function numToUplower($num=''){
            if(is_numeric($num)){
                $num="{$num}";

                $num_lenth=strlen($num);

                $output='';
                if($num_lenth>0){
                    for($i=0;$i<$num_lenth;$i++){

                        $num_one=substr($num,$i,1);
                        switch($num_one){
                            case '1':

                                $output.='一&nbsp;';
                                break;

                            case '2':

                                $output.='二&nbsp';
                                break;
                            case '3':

                                $output.='三&nbsp';
                                break;

                            case '4':

                                $output.='四&nbsp';
                                break;
                            case '5':

                                $output.='五&nbsp';
                                break;

                            case '6':

                                $output.='六&nbsp';
                                break;

                            case '7':
                                $output.='七&nbsp';
                                break;
                            case '8':
                                $output.='八&nbsp';
                                break;
                            case '9':
                                $output.='九&nbsp';
                                break;
                            case '0':
                                $output.='零&nbsp';
                                break ;

                        }
                    }
                    return $output;
                }
            }else{

                return '请输入正确的数字';

            }



        }

       return numToUplower('01231');
       ?>
