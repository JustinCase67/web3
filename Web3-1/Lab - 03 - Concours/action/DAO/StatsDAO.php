 <?php
    

    class StatsDAO {

        public static function save($name, $roomType){
            file_put_contents("stats.txt", $name.";".$roomType.";\n", FILE_APPEND);
        }

        public static function counteur(){
            $data = file_get_contents("stats.txt");
            $tab_data = explode("\n", $data);
    
            return (count($tab_data)-1);
            
        }

        public static function countPerRoomType()
        {
            $data = file_get_contents("stats.txt");
            $simple = 0;
            $double = 0;
            $suite = 0;
            $tab_data = explode("\n", $data);
            array_pop($tab_data);


            foreach ($tab_data as $ligne) {
                
                $entry = explode(";", $ligne);
                if($entry[1] == "Simple"){
                    $simple++;
                }
                else if($entry[1] == "Double"){
                    $double++;
                }
                else if($entry[1] == "Suite"){
                    $suite++;
                }
            }
            return [$simple, $double, $suite];
        }

    }
 ?>