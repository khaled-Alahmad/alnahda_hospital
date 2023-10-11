// $(document).ready(function () {
//     // استجابة لتغييرات في حقل البحث
//     $('#search-illness').on('keyup', function () {
//         var searchTerm = $(this).val();
//         $.ajax({
//             url: "{{ route('illnesses.search') }}",
//             method: 'GET',
//             data: {
//                 search: searchTerm
//             },
//             success: function (response) {
//                 // قم بمسح الصفوف الحالية في الجدول
//                 $('#search-results').empty();
//                 // إضافة النتائج الجديدة إلى جدول النتائج
//                 $('#search-results').html(response);
//             },
//             error: function (xhr) {
//                 // معالجة الأخطاء إذا كان هناك خطأ في الطلب
//                 $('#search-results').html('<tr><td colspan="3">حدث خطأ أثناء البحث.</td></tr>');
//             }
//         });
//     });
// });
