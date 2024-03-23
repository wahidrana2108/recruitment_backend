<!-- db fetch start -->
<?php
try {
    $pdo = new PDO('sqlite:db/dua_main.sqlite');   
    $get_dua = 'select * from dua';
    $run_dua = $pdo->query($get_dua); 
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    
}
?>
<!-- db fetch end -->


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Dua & Ruqyah</title>

    <link rel='shortcut icon' href='/assets/logo-CZPcyRJr.png' type='image/x-icon'>
  <link rel='stylesheet' crossorigin href='/assets/index-DFbXHONZ.css'>
</head>

<body class='bg-gray-100 container w-9/10 m-auto'>
    <div class='container flex flex-row'>
        <div class='nav flex flex-col h-full w-[150px] bg-white m-7 rounded-2xl items-center'>
            <div class=''><img class='h-[73px] w-[73px]' src='/assets/logo-CZPcyRJr.png' alt=''></div>
            <div class=' w-[38px] flex flex-col items-center justify-between pt-[89.5px]'>
                <div
                    class='h-[38px] w-[38px] bg-[#E8F0F5] rounded-full flex justify-center items-center gap-[27px] m-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d='m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25' />
                    </svg>
                </div>
                <div
                    class='h-[38px] w-[38px] bg-[#E8F0F5] rounded-full flex justify-center items-center gap-[27px] m-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d='M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z' />
                    </svg>
                </div>
                <div
                    class='h-[38px] w-[38px] bg-[#E8F0F5] rounded-full flex justify-center items-center gap-[27px] m-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d='M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18' />
                    </svg>
                </div>
                <div
                    class='h-[38px] w-[38px] bg-[#E8F0F5] rounded-full flex justify-center items-center gap-[27px] m-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d='M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z' />
                    </svg>
                </div>
                <div
                    class='h-[38px] w-[38px] bg-[#E8F0F5] rounded-full flex justify-center items-center gap-[27px] m-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d='M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z' />
                    </svg>
                </div>
                <div
                    class='h-[38px] w-[38px] bg-[#E8F0F5] rounded-full flex justify-center items-center gap-[27px] m-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d='M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155' />
                    </svg>
                </div>
                <div
                    class='h-[38px] w-[38px] bg-[#E8F0F5] rounded-full flex justify-center items-center gap-[27px] m-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d='M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25' />
                    </svg>
                </div>
            </div>
            <div class=''><img class='h-[56px] w-[57px] mt-[175px]' src='/assets/support-CUm6GxVX.png' alt=''></div>
        </div>

        <!-- category section start -->
        <div class='my-7 gap-[15px]'>
            <h3 class='font-bold  text-2xl text-gray-700 mb-6'>Dua Page</h3>
            <div class='h-auto w-[429px] bg-white mt-3 rounded-[10px]'>
                <p class='bg-[#1fa45b] h-[57px]  text-white flex items-center justify-center rounded-t-2xl'>Categories
                </p>
                <div class='border w-[399px] gap-10 rounded-lg m-4 pb-2'>
                    <button class='text-gray-400 translate-y-1 '><span
                            class=' h-[44px] w-[44px] rounded-[6px] p-1 flex justify-center items-center '> <svg
                                xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                stroke='currentColor' class='w-6 h-6'>
                                <path stroke-linecap='round' stroke-linejoin='round'
                                    d='m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z' />
                            </svg></span>
                    </button>
                    <input class='rounded-lg w-[340px] outline-none -translate-y-1' type='text' name='search'
                        id='search' placeholder='Search by Categories'>
                </div>
                    <div class='h-full py-[15px] '>
                        <div class='h-full gap-[4px]'>
                            <div class='w-full h-auto max-h-[650px] overflow-auto touch-auto'>
                                <!-- cat fetch start -->
                                <?php
                                    $get_cat = 'select * from category';
                                    $run_cat = $pdo->query($get_cat); 
                                    
                                    while($row_cat = $run_cat->fetch(PDO::FETCH_ASSOC)){
                                        $cat_id = $row_cat['cat_id'];
                                        $cat_name_en = $row_cat['cat_name_en'];
                                        $no_of_subcat = $row_cat['no_of_subcat'];
                                        $no_of_dua = $row_cat['no_of_dua'];
                                        echo"                                                                                    
                                            <div id='$cat_id' class='h-[80px] w-[399px] gap-[16px] p-[10px] mb-2 flex flex-row mx-auto rounded-lg shadow-[0_2px_0_0_rgba(134,134,134,0.2)] hover:bg-gray-100 cursor-pointer cat'>
                                                <div>
                                                    <img class='h-[60px] w-[60px] ' src='data:image/png;base64,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' alt=''>
                                                </div>
                                                <div class='w-[235px] h-[45px]'>
                                                    <h4 class='font-semibold'>$cat_name_en</h4>
                                                    <p class='text-gray-600 text-sm'>Subcategory: $no_of_subcat</p>
                                                </div>
                                                <span class='h-full w-[1px] bg-[#E2E2E2] -translate-x-3'></span>
                                                <div class='text-center  text-[#7e7e7e]'><span class='font-bold text-black'>$no_of_dua</span><br>
                                                    Duas</div>
                                            </div> ";

                                        $get_subcat = 'select * from sub_category where cat_id='.$cat_id;
                                        $run_subcat =$pdo -> query($get_subcat);
                                        while($row_subcat = $run_subcat->fetch(PDO::FETCH_ASSOC)){
                                            $subcat_name_en = $row_subcat['subcat_name_en'];
                                        echo"                                         
                                            <!-- subcat start -->
                                            <div id='sub_menu$cat_id' class='text-black ps-6 toggle-menu hidden sub_menu'>
                                                <div class='mb-4'>
                                                    <ul>
                                                        <li class='mb-2 flex items-center'>
                                                            <span class='flex flex-col'>
                                                                
                                                                <!-- Repeat the dot 5 times -->
                                                                <span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                </span>
                                                                <span class='block h-[8px] w-[8px] bg-green-500 rounded-full mb-1'></span>
                                                            </span>
                                                            <span class='text-black font-semibold ps-4 pt-6'>$subcat_name_en</span>
                                                        </li>
                                                        <li class='mb-2 flex items-center -translate-y-2 ps-[2px] '>
                                                            <span class='flex flex-col'>
                                                                <!-- Repeat the dot 5 times -->
                                                                <span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto mb-[5px]'></span>
                                                                    <span class='block h-[3px] w-[3px] bg-[#1FA45B] mx-auto'></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <!-- Repeat for other list items -->
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- subcat end -->
                                        ";}
                                    }
                                ?>
                                <!-- cat fetch end -->                                
                            </div>                            
                        </div>                        
                    </div>
            </div>
        </div>
        <!-- category section end -->

        <!-- dua section start-->
        <div class='h-full w-[889px] gap-[15px] mx-7 pt-[20.5px]'>
            <div class='flex text-white justify-end'>
                <input class='border rounded-lg w-[371px] h-[52px] p-3 translate-x-10 text-gray-500' type='text'
                    name='search' id='search' placeholder='Search by Dua Name'>
                <button class='text-gray-900 -translate-x-2'><span
                        class='bg-[#F3F4F6] h-[44px] w-[44px] rounded-[6px] p-1 flex justify-center items-center'> <svg
                            xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                            stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round'
                                d='m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z' />
                        </svg>
                    </span></button>
            </div>

            <div class='w-full h-[1123px] overflow-auto touch-auto'>

                <?php
                    $get_sub = 'select * from sub_category order by id asc';
                    $run_sub = $pdo->query($get_sub);
                    while($row_sub = $run_sub->fetch(PDO::FETCH_ASSOC)){
                        $subcat_id = $row_sub['subcat_id'];
                        $subcat_name_en = $row_sub['subcat_name_en'];
                        echo"

                            <div class='top-[133px ] h-[55px] bg-white mt-3 rounded-[10px] flex items-center'>
                                <p class='font-semibold text-[#393939]'><span class='text-[#1fa45b] px-[15px] py-[30px]'>Section:
                                    </span>$subcat_name_en</p>
                            </div>";


                    $get_dua = 'select * from dua where subcat_id='.$subcat_id;
                    $run_dua = $pdo->query($get_dua);
                    while($row_dua = $run_dua->fetch(PDO::FETCH_ASSOC)){
                        $id = $row_dua['id'];
                        $dua_id  = $row_dua['dua_id'];
                        $cat_id = $row_dua['cat_id'];
                        $dua_name_en = $row_dua['dua_name_en'];
                        $refference_en = $row_dua['refference_en'];
                        $dua_arabic = $row_dua['dua_arabic'];
                        $dua_indopak = $row_dua['dua_indopak'];
                        $transliteration_en = $row_dua['transliteration_en'];
                        $translation_en = $row_dua['translation_en'] ;
                        $top_en = $row_dua['top_en'];
                        $dua_indopak = $row_dua['dua_indopak'];
                echo"                
                    <div class='top-[133px] bg-white mt-3 rounded-[10px] flex items-center'>
                        <div class='p-5'>
                            <div class='flex  flex-row'>
                                <img class=' h-[35px] w-[35px]' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAP/SURBVHgBzVjNVtpQEJ65gXZZXPacFtNdN21ddlf6BA3tpgVUeIKePgHwBOoTgD+xrkSfQNx1V60PYLAvgLsqcqczUWIIIYGkx9PvHIR7c3++zJ2Zb64IKfFs+3PBAKOFiopOefcEUkBBCpg75VUDjSNAcIjwp7QhBRKTkY0JoE1EzV7Ffo+ETWmnIWRAAviJXCzvNqSv3/nVXSi+YU6wvvDxtdPfPzuFOYGhm7U+m1NnZI13QSJmq5pzau2++3u70iCkOoH+pgZ0MG0Zp7bnxJIRIpQ1ziECY0TsSp3bQqBxUd5t+glFrYGD4Ysgoalk2A8QYuAR0bCJClb9hKKwuFOmMDLJHfiOCGqqXazYVflmh2nk7VI96ZqZuAGmXV3S+toa6yQ0mciqEHBWdtvSJd/mVolfD1v57bLJg3r+KUrBQVweirWMEOHzWlWAi94HmY6PyAjSRo1F5S58P17maw1W3F6xlhFw9HR7y3ZtlrHOyo5E0FgU5be+tAFjXTBdBv7XmCTzKPMBHgKcryCKjJtZidYlj3id7KwwAyTxRY/ARe/XFOlQY0SCmZXDV/KHIjqM2iZvV77q7HXbR8zM+zZiJ+6yy1RHYe8s7zTCCGEUkVEeCUaNWGH4+KqgtKojXte0zlqI+A4H2SI9GhzpoW4qVGvs9C+8OVulKnHYh2VqJlF1KvamkjwyD5HnW18sytycK1Jr3Fy60YbveP7kOPSWwMCJI7sN+/HEOGYhu7SkSA863N/1i56b4gnaQSKuyZUSEdzolfmtuY6BOSDrudLBhEY+JoRkf+7vKKnQuFHw2LL6Cls549DaBCHHHtiHBJD1XA3jU/BUnk9B9uf+opIUHWm+ACEcwgaCWmOxO+IjMWfkEe+XzMMtrvqds5MF61WPs+T6k0+v4HL/7HhascRjfyxYb04J6IqdNqcUvkTAt/zoJaF6ykqRY3/a5LZ12TnbkDniZzx2L84vvdCe5mByxpqo4H9LSfmyKJcBRdRK6ptjjoimq1lsbrjJONzuetZkYuKDcQGSGd/kXnm5eZv4kBz+uxhi+VG1VoRwBLTsXsVdIgDfggEyKQdD3YWHwGA4UZL+V0I5UwnBDlowt8stf9/Q0Ie/S98n3s6NPoKCv4+jiIt497gjEWsZqdB4oU3NZ+59CJCloBMM+1H4av7tHy/zZZ24vWItc1cqTpSLrCsO64rkIRBdCcsj8yKxz/gTI9e8rbREBFMtI9eJac9GyiuE2EIS/vWwhAZzYv4bpWFYpGBtrBRoWXyjPOj7iUhCi0oTYTfKRJDaRCwXvCMJEemX55AAiS7+YVoWVQPNivj7QwRG1Rvc6lAhDZHUZFxCXKFJYSQCmfY/V38B7Z/bmPR7PeYAAAAASUVORK5CYII=' alt=''>
                                <div class='flex items-center'>
                                    <h4 class='ps-3 text-[#1FA45B] font-semibold'>$dua_id. $dua_name_en</h4><br>
                                </div>
                            </div>
                            <div class='p-3'>
                                <p class='text-[#393939] font-semibold ps-0 text-justify'>$top_en</p> <br>
                                <p class='ps-0 font-bold  text-right'>$dua_arabic</p> <br>";

                                if($transliteration_en !== null){
                                echo"<p class='text-[#393939] font-semibold ps-0 italic text-justify'><span class='font-bold'>Transliteration: </span>$transliteration_en</p> <br>";
                                }
                                if($transliteration_en !== null){
                                echo"<p class='font-semibold ps-0 text-gray-600 text-justify'><span class='font-bol'>Translation: </span>$translation_en</p> <br>";
                                }
                                echo"
                            </div>
                            <div class='p-3'>
                                <span class='text-[#1fa45b] font-bold pb-0'>Reference:</span>
                                <p class='text-[#393939] pt-0 font-semibold'>$refference_en </p>
                            </div>


                            <div class='cardFooter h-[34px] flex text-[#868686] justify-end'>
                                <div
                                    class='p-4 h-[44px] w-[44px] rounded-full bg-[#1FA45B] flex justify-center items-center text-white mr-[235px]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'
                                        class='w-6 h-6'>
                                        <path fill-rule='evenodd'
                                            d='M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z'
                                            clip-rule='evenodd' />
                                    </svg>
                                </div>
                                <div class='p-4'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'
                                        stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round'
                                            d='M16.5 8.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v8.25A2.25 2.25 0 0 0 6 16.5h2.25m8.25-8.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-7.5A2.25 2.25 0 0 1 8.25 18v-1.5m8.25-8.25h-6a2.25 2.25 0 0 0-2.25 2.25v6' />
                                    </svg>
                                </div>
                                <div class='p-4'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                        stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round'
                                            d='M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z' />
                                    </svg>
                                </div>
                                <div class='p-4'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                        stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round'
                                            d='M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18' />
                                    </svg>
                                </div>
                                <div class='p-4'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                        stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round'
                                            d='M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z' />
                                    </svg>
                                </div>
                                <div class='p-4'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                        stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round'
                                            d='m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z' />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                    }}
                ?>

                <!-- dua fetch end -->                
            </div>
        </div>
        <!-- dua section end -->


        <!-- profile section  start -->
        <div class='pt-[25px]'>
            <div class='flex flex-row items-center justify-end mr-3'>
                <img class='h-[45px] w-[45px] rounded-full mr-2' src='data:image/png;base64,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' alt=''>
                <span class='h-[9px] w-[12px] text-[#868686] cursor-pointer'>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                        <path fill-rule='evenodd'
                            d='M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-.53 14.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V8.25a.75.75 0 0 0-1.5 0v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z'
                            clip-rule='evenodd' />
                    </svg>
                </span>
            </div>

            <div class=' bg-white rounded-3xl mt-3 h-[830px]'>
                <h3 class='text-center font-bold text-2xl pt-[35px] pb-5'>Settings</h3>

                <div class='mx-3 rounded-lg h-[154px] shadow-[0_1px_1px_1px_rgba(134,134,134,0.2)]'>
                <div class='h-[55px] w-[289px] text-[#1FA45B]  bg-[#F7F8FA] mt-3  rounded-lg flex items-center ps-3'>
                    <span class='h-full w-[5px] bg-[#1FA45B] -translate-x-3 rounded-l'></span>
                    <span class='bg-[#E8F0F5] h-[38px] w-[38px] rounded-full p-1 flex justify-center items-center'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802' />
                        </svg>
                    </span> Language Settings
                </div>
                <div class='flex items-center w-full justify-between mb-10 mt-4'>
                    <span class='translate-y-2 text-white cursor-pointer'>
                        <button class='h-[50px] w-[100px] bg-[#1FA45B] rounded-[10px] ms-10 hover:bg-[#28774b]'>English</button>
                    </span>
                    <span class='translate-y-2 text-black cursor-pointer'>
                        <button class='h-[50px] w-[100px] bg-white border rounded-[10px] me-10 hover:bg-gray-300'>বাংলা</button>
                    </span>
                </div>
                </div>

                <div class='h-[55px] w-[289px] text-[#868686] bg-[#F7F8FA] m-3 rounded-lg flex items-center ps-3'>
                    <span class='bg-[#E8F0F5] h-[38px] w-[38px] rounded-full p-1 flex justify-center items-center'><svg
                            xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                            stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round'
                                d='m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z' />
                        </svg>
                    </span> General Settings
                </div>


                <div class='h-[55px] w-[289px] text-[#868686] bg-[#F7F8FA] m-3 rounded-lg flex items-center ps-3'>
                    <span class='bg-[#E8F0F5] h-[38px] w-[38px] rounded-full p-1 flex justify-center items-center'><svg
                            xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                            stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round'
                                d='M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z' />
                        </svg>
                    </span> Font Settings
                </div>


                <div class='h-[134px] mx-3 rounded-lg shadow-[0_1px_1px_1px_rgba(134,134,134,0.2)]'>
                    <div
                        class='h-[55px] w-[289px] text-[#868686] bg-[#F7F8FA] my-3 rounded-lg flex items-center ps-3 text-[#1FA45B]'>
                        <span class='h-full w-[5px] bg-[#1FA45B] -translate-x-3 rounded-l'></span>
                        <span
                            class='bg-[#E8F0F5] h-[38px] w-[38px] rounded-full p-1 flex justify-center items-center text-[#1FA45B]'><svg
                                xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                stroke='currentColor' class='w-6 h-6'>
                                <path stroke-linecap='round' stroke-linejoin='round'
                                    d='M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z' />
                            </svg>
                        </span> </span> <span class='text-[#1FA45B]'> Appearance Settings</span>
                    </div>
                    <div class='flex items-center w-full justify-between'>
                        <p class='font-semibold ps-7 pt-4  text-[#393939]'>Night Mode</p>
                        <span class='text-right translate-y-2 pr-7 text-[#C1C1C1B2]'>
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                                <path fill-rule='evenodd'
                                    d='M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z'
                                    clip-rule='evenodd' />
                            </svg>

                        </span>
                    </div>
                </div>

            </div>
        </div>
        <!-- profile section end -->
    </div>
    <script src='script.js'></script>
</body>

</html>