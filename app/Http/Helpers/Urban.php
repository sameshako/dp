<?php



use Illuminate\Support\Facades\DB;



if (!function_exists("get_property_type")) {

    function get_property_type($value)

    {

        $property_type = DB::table("propertie_types")->where('key_int', $value)->first();

        if ($property_type) return $property_type->name;

    }

}



if (!function_exists("get_images")) {

    function get_images($array)

    {

        $array = json_decode($array);

        return $array[0];

    }

}



if (!function_exists("get_all_images")) {

    function get_all_images($array, $slug)

    {

        $array = json_decode($array);

        $html = '';

        foreach ($array as $image) {

            $html .= '<img class="img-fluid" alt="property-box" src="/storage/properties/' . $slug . '/' . $image . '" />';

        }

        return $html;

    }

}

if (!function_exists("get_images1")) {

    function get_images1($array, $slug)

    {

        $array = json_decode($array);

        $html = '';

        foreach ($array as $index => $image) {

            if ($index == 1) {

                $html = '/storage/properties/' . $slug . '/' . $image;

            }

        }

        return $html;

    }

}

if (!function_exists("get_images2")) {

    function get_images2($array, $slug)

    {

        $array = json_decode($array);

        $html = '';

        foreach ($array as $index => $image) {

            if ($index == 2) {

                $html = '/storage/properties/' . $slug . '/' . $image;

            }

        }

        return $html;

    }

}

if (!function_exists("get_images3")) {

    function get_images3($array, $slug)

    {

        $array = json_decode($array);

        $html = '';

        foreach ($array as $index => $image) {

            if ($index == 3) {

                $html = '/storage/properties/' . $slug . '/' . $image;

            }

        }

        return $html;

    }

}

if (!function_exists("get_images4")) {

    function get_images4($array, $slug)

    {

        $array = json_decode($array);

        $html = '';

        foreach ($array as $index => $image) {

            if ($index == 4) {

                $html = '/storage/properties/' . $slug . '/' . $image;

            }

        }

        return $html;

    }

}







if (!function_exists("get_first_image")) {

    function get_first_image($array, $slug)

    {

        $array = json_decode($array);

        $html = '';

        foreach ($array as $index => $image) {

            if ($index == 0) {

                $html = '/storage/properties/' . $slug . '/' . $image;

            }

        }

        return $html;

    }

}





if (!function_exists("get_atribute")) {

    function get_atribute($value, $type)

    {

       

        $property_attr = DB::table("propertie_attributes")->where('propertie_id', $value)->where('type',null)->first();

        

        if ($property_attr) {

           $html='';

            $array = json_decode($property_attr->value, true);

            

               if(array_key_exists('105', $array))

               {

                 $html .= '<li> <i class="flaticon-bed"></i>' . $array[105] . ' mp </li>';

               }

               if(array_key_exists('42', $array))

               {

                $html .=  '<li> <i class="flaticon-bed"></i>' . $array[42] . ' cam. </li>';

               }

               

               if(array_key_exists('43', $array))

               {

                $html .=  '<li> <i class="flaticon-bed"></i>' . $array[43] . ' bai </li>';

               }

                

               if(array_key_exists('162', $array))

               {

                $html .= '<li> <i class="flaticon-bed"></i>' . $array[162] . ' mp </li>';

               }

               if(array_key_exists('155', $array))

               {

                $html .= '<li> <i class="flaticon-bed"></i>' . $array[155] . 'm strada </li>';

               }

               if(array_key_exists('44', $array))

               {

                $html .= '<li> <i class="flaticon-bed"></i>an' . $array[44] . '  </li>';

               }

            return $html;

        }

    }

}



if(!function_exists("get_attribute_object"))

{

    function get_attribute_object($attr_id)

    {

        $attribute=DB::table("attributes")

        ->where('id', $attr_id)->first();

        if($attribute) return $attribute;

    }

}

if (!function_exists("get_all_attributes")) {

    function get_all_attributes($id)

    {

        $property_attr = DB::table("propertie_attributes")->where('propertie_id', $id)->get();

        if (count($property_attr) > 0) {

            $html = '';

            $html_tags = '';

            foreach ($property_attr as $elem) {





                if ($elem->type != 'tags') {

                    $array = json_decode($elem->value);

                    $html .= "<div class='row'>";

                    foreach ($array as $key => $attr) {

                        $attributes = DB::table("attributes")->where('id', $key)->first();

                        if ($attributes) {

                            if ($attributes->name != 'Adăugată la') {

                                $html .= '<li class="attributes-fields col-md-4">-<b style="color:#2339d6">' . $attributes->name . ':</b> ' . $attr . '</li>';

                            }

                        }

                    }

                    $html_tags .= "</div>";

                }



                if ($elem->type == 'tags') {

                    $array = json_decode($elem->value, true);

                    $html_tags .= "<div class='row tags'>";

                    foreach ($array as $key => $elem) {



                        $html_tags .= "<div  class='col-sm-12 col-md-4'><h4>" . $key . '</h4>';

                        foreach ($elem as $elem_array) {

                            $html_tags .= "<li class='attributes-fields'><i class='flaticon-draw-check-mark'></i> " . $elem_array . "</li>";

                        }

                        $html_tags .= "</br></div>";

                    }

                    $html_tags .= "</div>";

                }

            }

            return $html . $html_tags;

        }

    }

}

// if (!function_exists('get_attributex')) {

//     function get_attributex($id)

//     {

//         $property_attr = DB::table("propertie_attributes")->where('propertie_id', $id)->WHERE('type', '!=', 'tags')->first();

//         if ($property_attr) {



//             $array = json_decode($property_attr);

//            return  $array;

          

//         }

//     }

// }

