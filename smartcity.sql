-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 07:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `tag_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Omnis saepe ipsum dolores iusto sed praesentium.', 'eos-fugit-delectus-sed-aut-voluptates-quia-ut-voluptatem', NULL, 'Molestiae labore ipsa molestias nulla laboriosam. Praesentium quia maiores dicta explicabo dolor aliquam minima. Aliquid quia illum repellat excepturi nihil.', '<p>Unde exercitationem dolores nobis. Non eaque quis deserunt. Eaque sunt sit vel possimus omnis non amet.</p><p>Soluta et aspernatur ut delectus. Quo illo et qui. Dolor et autem ipsum qui praesentium dignissimos.</p><p>In sit voluptas perspiciatis adipisci aut. Voluptates maxime numquam et labore.</p><p>Molestiae voluptatem nihil consequatur eveniet amet eligendi. Blanditiis temporibus aut esse impedit esse at minima. Voluptas ut eos est eligendi reprehenderit.</p><p>Modi sapiente tenetur eum in quibusdam inventore. Fuga vel praesentium enim minima quo. Fugiat qui voluptatum laboriosam nemo consequatur dolores. Quia aut et quia ab.</p><p>Laboriosam veritatis exercitationem laudantium sint non. Ea ut voluptatem eaque delectus rem. Voluptatem vel id dolor nemo qui.</p><p>Fuga corporis earum similique in. Ut quidem aperiam ducimus quisquam inventore. Nisi quisquam fugit id accusantium rerum quo. Et expedita et modi aut alias praesentium earum.</p><p>Voluptatum et distinctio dolorem non voluptatum nemo consequatur. Numquam voluptatum eum quis fugit. Officiis similique blanditiis quam et.</p><p>Ipsam incidunt id vitae nesciunt est necessitatibus aut nam. Rerum sit vero nihil laborum est rem alias accusantium. Iure tenetur hic quidem architecto qui explicabo qui. Consequatur earum quo iusto dolorum.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(2, 2, 'Labore cumque cum sed.', 'doloribus-sit-est-numquam-qui-laborum', NULL, 'Blanditiis beatae debitis assumenda consequatur dolor. Voluptate nihil explicabo labore iure. Vero neque voluptatem neque dolorem ducimus. Enim aliquam dolor omnis dolores eos aut nihil. Delectus asperiores enim animi reiciendis est corrupti.', '<p>Qui repellat non a commodi consectetur quam. Sint reiciendis id praesentium atque facilis sed dolores placeat. Tempore ut enim accusantium architecto eveniet vel illum.</p><p>Neque dolor similique in perferendis cupiditate voluptas. Accusantium recusandae iste alias excepturi expedita sit omnis. Et voluptatem dolorem aliquid nemo ab atque. Qui natus qui libero pariatur asperiores amet eaque.</p><p>Eos aperiam illo quod eligendi assumenda praesentium saepe. Quia repellat sit aliquam. Est minus sint dolorem eos recusandae.</p><p>Temporibus rerum sed nobis numquam dignissimos. Ipsa consequuntur molestias modi quisquam praesentium corporis dignissimos. Quae dolorem iure corporis qui quas.</p><p>Labore ducimus fuga qui repellendus reprehenderit rem. Cum qui vel suscipit alias. Quos et nihil nihil blanditiis quia.</p><p>Consequatur delectus blanditiis tempora sit cumque et. Quis aut maiores sint delectus. Enim consequuntur expedita iusto odio. At dicta eveniet aliquam iure quis.</p><p>Et est sed necessitatibus nisi voluptatibus molestiae ullam. Ipsum rem provident ipsum quae. Beatae et fuga nam eum error accusantium accusantium. Sint a ut itaque eos.</p><p>Id sed totam et accusantium dicta molestiae. Nulla et quidem assumenda rerum. Eos velit in recusandae qui facilis facere placeat recusandae. Neque architecto omnis ratione autem expedita.</p><p>Modi dolorem et pariatur maiores minus qui. Quo quibusdam hic nam quod incidunt sed. Eaque itaque earum assumenda qui.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(3, 3, 'Qui culpa et ut vel est.', 'atque-modi-et-sed-et-qui-et-voluptatibus', NULL, 'Hic ratione ipsa qui et numquam. Sed dolorum non et quam consequatur. Neque debitis molestiae impedit porro sequi eius beatae.', '<p>Neque quia aut at qui facere odit numquam. Nam harum consequatur itaque sit ipsum. Optio cupiditate rerum tempora ratione est odio earum. Enim veritatis eum id aut suscipit quisquam. Aut sed laudantium fugiat voluptatem porro.</p><p>Explicabo impedit veritatis rem eum voluptatem vel perferendis. Modi quo optio asperiores non vero natus similique. Nemo dicta ex rerum consequuntur laboriosam id. Officia quasi sint veritatis consequatur qui molestiae eius.</p><p>Aut occaecati aperiam veniam architecto nisi totam. Quibusdam est ratione dignissimos. Ut deserunt iusto maxime officia quia iste. Autem et autem repudiandae provident.</p><p>Repellat culpa omnis est tempora sapiente. Ut aut vel ipsum excepturi totam. Ut aut magnam qui molestiae dolorem voluptas eum.</p><p>Occaecati optio ab dolorem illo praesentium excepturi sit. Harum blanditiis et facilis ullam. Ut ipsum tempora inventore libero tenetur. Distinctio et itaque natus corrupti.</p><p>Error reiciendis nobis et at autem a rem. Omnis excepturi nihil dolorum illo modi aliquid. Est ea sit aut quia quisquam.</p><p>Sit porro doloremque veritatis hic mollitia maxime. Molestiae facilis est quisquam autem. Numquam ipsa voluptatem aliquid facilis necessitatibus id.</p><p>Omnis sed dolore ab culpa praesentium. Velit ut laudantium doloribus quis amet temporibus. Enim unde veniam qui quo repellendus. Ipsum aut enim cumque est et id odit itaque. Veniam dolores voluptate fuga illum in.</p><p>Sed incidunt voluptates accusamus aperiam illo libero. Dolor a voluptas quasi modi. Nobis dolorum sit quod ducimus rerum.</p><p>Ipsum ut sunt maxime sunt magnam placeat dolore odit. Blanditiis architecto harum dolorem aliquid. Eveniet aperiam officia aut voluptatem labore voluptatem.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(6, 2, 'Iusto numquam quia consectetur placeat.', 'expedita-aliquam-illum-consequatur-rerum-quaerat-et', NULL, 'Beatae alias sed animi quae quidem aut quia. At dignissimos consequatur et ut aut.', '<p>Aliquam voluptatum quis atque possimus dolore non et. Alias aut ea error et nisi sed. Ducimus molestiae distinctio qui vero animi.</p><p>Quam nihil veniam consectetur minus enim. Vero rerum et expedita eaque eum quo. Et et ad qui necessitatibus.</p><p>Et temporibus a neque tempore. Aut odio nobis officia sint dignissimos qui voluptates. Laborum alias id quas dicta deserunt ut.</p><p>Deleniti sint id corporis aut quisquam. Animi cum nostrum dolorem soluta vel quo. Autem dicta ipsum voluptate aut aut voluptate.</p><p>Similique rerum soluta voluptatum odio magni aspernatur laborum magni. Dolores harum voluptatem inventore consectetur impedit at vel. Ab sunt eveniet adipisci voluptate. Natus fugit aut ea cumque ea quidem similique.</p><p>Reiciendis et nesciunt sint ab non. Aut cum fuga vel quo aut. Ea enim rerum quia porro quae ut itaque. Sunt cum aspernatur provident a delectus sint.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(7, 2, 'Cupiditate accusamus cum est sed expedita.', 'hic-officiis-aut-voluptates-et', NULL, 'Sed enim mollitia architecto fugiat dolore quisquam nobis voluptates. Corrupti sint excepturi aut tempore porro ex. Eveniet autem qui optio soluta non est eligendi. Aspernatur fugiat autem doloremque odit.', '<p>Repellat veritatis omnis est reprehenderit ipsam vel. Animi quia omnis porro exercitationem consequuntur modi vel. Fuga incidunt explicabo placeat quae est temporibus officiis rerum. Consequatur nemo ratione sequi error dolor.</p><p>Dolor fugiat aut voluptatem porro. Repellendus eius aut fuga et dolores officiis qui. Et dolorem non magni molestias iure voluptatum. Inventore et ea quis laudantium voluptatem pariatur quia.</p><p>Voluptate vero neque iure quo enim. Natus a vel est praesentium aut ullam. Qui debitis ut quia rerum. Dolor id assumenda sed tempore.</p><p>Perspiciatis omnis maiores ut impedit amet voluptatem et. Eveniet nesciunt quae quasi odio. Quia quis similique cum magnam.</p><p>Ea nostrum assumenda accusamus facere eos iste. Qui rerum iusto atque ullam dolores inventore sunt. Qui iusto qui nostrum enim enim iure fugit.</p><p>Ipsa ducimus nostrum facilis ea facilis. Quaerat doloribus amet id consectetur. Quam voluptates accusamus soluta molestiae dolorem est at. Non odit earum autem ex fugiat voluptatem et.</p><p>Eos sequi quo iste consequuntur. Temporibus dignissimos repellendus sunt tenetur aperiam provident minus. Inventore rerum dolor ipsa et et ex. Cum perspiciatis et totam quasi animi.</p><p>Ut corrupti praesentium ad perferendis voluptatibus dolores sint ipsa. Sapiente possimus qui assumenda dolorem repellendus laudantium. Quo ut in molestiae veritatis.</p><p>Vero debitis accusamus quia officia. Corrupti excepturi facere incidunt unde blanditiis.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(8, 1, 'Placeat error illo rerum eligendi aliquid officia odio inventore laudantium.', 'possimus-reprehenderit-aperiam-odit-cumque', NULL, 'Et ex hic dolorem qui illum adipisci aut. Ab cupiditate sunt tempora. Cum dolorum asperiores at molestiae aut.', '<p>Dolorem dolor voluptate temporibus quas laudantium. Sapiente dolor excepturi eos minus et quidem.</p><p>Necessitatibus illum eum dolorum qui perferendis minima. Et deleniti dolorum rem occaecati est. Ad ducimus fuga vitae nostrum vitae omnis. Officia distinctio sapiente et numquam suscipit earum architecto.</p><p>Blanditiis totam corrupti tempore culpa recusandae dolorem. Impedit voluptas consequatur corporis distinctio. Consequatur omnis sed labore est laboriosam. Velit totam aut beatae.</p><p>Quibusdam recusandae tempora facilis qui ea. Nobis veniam aliquam aut similique. Id alias quis vel. Voluptatem non perspiciatis voluptatem beatae aspernatur magnam vel occaecati.</p><p>Debitis iste dolores et omnis quis dolore consequatur. Non odio ex repellendus nihil doloremque quam debitis doloribus. Ea consequatur quis sint sit assumenda.</p><p>Aut vel aut ad facere corrupti optio dolore. Commodi deserunt deserunt qui sit quia quia quae. Esse eaque laboriosam et consequatur repellendus.</p><p>Accusantium libero omnis ex et inventore dolorem. Quae quidem voluptatem illum quisquam. Aspernatur dolorem repellat numquam voluptatibus ratione. Dolore placeat in consequatur et sint.</p><p>Recusandae voluptatem placeat recusandae et deserunt temporibus maxime est. Saepe consectetur non voluptatem. Officia molestiae aspernatur voluptatem ea neque est et. Enim accusantium esse incidunt id inventore. Sed quibusdam consequuntur perspiciatis quia consequatur nulla.</p><p>Iste ratione laudantium architecto quis qui ut ipsa. Aspernatur sit rerum qui aut ad. Rerum eligendi autem dolorem omnis voluptas in. Labore suscipit quisquam earum nulla error ut.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(9, 3, 'Fugit maxime.', 'at-non-minus-sit-quos-quasi-qui', NULL, 'Eligendi quibusdam odio aut quo est nostrum. Sunt placeat tempore voluptatum. Aut est porro sit adipisci accusamus pariatur non.', '<p>Voluptas nihil veniam exercitationem iste neque. Qui amet esse expedita sint. Eligendi rerum aut nobis voluptate perspiciatis.</p><p>Quia debitis magnam fugit voluptatem. Placeat officiis et impedit numquam.</p><p>Dolor sint est recusandae minus repellendus eveniet. Incidunt ipsa dolor ut beatae est quia. Totam explicabo vel quis sit consequatur.</p><p>Quam similique aperiam molestiae occaecati. Provident qui et officia voluptas omnis. Consequatur fugiat labore voluptas aut minima. Qui similique ex eveniet illo ab delectus.</p><p>Reiciendis omnis rerum modi odio aperiam voluptas officia. Qui dolorem sit iste molestiae.</p><p>Animi est nobis quas mollitia corrupti maxime velit. Ut dolorum cum error ducimus cum accusantium molestiae. Et pariatur ea facere cupiditate suscipit omnis placeat ratione.</p><p>Minus minus mollitia odit exercitationem consequuntur labore. Aliquid omnis dicta unde quo modi quia qui. Veritatis voluptas dignissimos eaque itaque harum nulla.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(10, 2, 'Quae repudiandae est eos doloremque enim dolore.', 'rem-consequatur-facilis-dolorum-et-vel', NULL, 'Placeat quas eum architecto aliquid atque maiores voluptatum. Nulla doloremque officia ea qui.', '<p>Adipisci ducimus harum fugiat. Blanditiis unde vel et nisi laborum. Labore quis est eius autem. Dolor ducimus soluta veritatis.</p><p>Aut sit et magni pariatur recusandae quibusdam. Hic id facere vero labore ut aperiam ad.</p><p>Velit voluptatem quo eveniet accusantium. Deleniti quia eum quos omnis. Autem quisquam necessitatibus ut. Suscipit unde placeat dolorem molestiae doloribus id corrupti. Ea sit ea enim qui.</p><p>Temporibus laudantium sint nobis officiis voluptas nisi. Architecto asperiores itaque et officiis sapiente molestiae. Et quia dolores tenetur nam architecto aspernatur. Culpa modi itaque temporibus sit.</p><p>Quia et dolores nisi. Repudiandae deleniti repellendus incidunt odio suscipit. Minima accusantium aut perspiciatis rerum aut enim in molestias.</p><p>Aut veritatis et illum cum. Molestias atque aut tempore recusandae commodi autem. Deleniti aspernatur quam voluptate mollitia voluptas. Consectetur officiis est debitis repudiandae molestias nulla eius.</p><p>Delectus illo nemo et magnam est non fugit vel. Tenetur illo aliquid qui voluptate reprehenderit ipsum perspiciatis.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(11, 2, 'Est sit explicabo laudantium eum voluptate eos.', 'modi-magnam-et-voluptatem-perspiciatis-rem-voluptas', NULL, 'Aut dolorem placeat voluptas non sint. Culpa repudiandae voluptas officiis alias. Ab fugiat voluptatibus placeat et. Sed quo et quod veniam expedita.', '<p>Aperiam et doloribus voluptatem. Quia quod ab quia maiores accusantium aliquid ut. Accusamus in officia eos ab dolores reprehenderit. Occaecati est est quasi et.</p><p>Est id nisi quasi dolorum ea. Quos eos qui vitae harum. Veritatis libero aut quas esse porro molestias debitis velit.</p><p>Consequatur ipsam sapiente harum vitae nobis. Mollitia cum est quasi eveniet fugiat et tempore. Illo debitis a omnis. Vel est mollitia quis debitis tenetur. Voluptatem nesciunt qui molestias autem ut molestias.</p><p>Ea quo dolorem maiores animi neque quisquam. Et est temporibus ipsum unde repudiandae enim. Modi necessitatibus aut adipisci dignissimos.</p><p>Aut animi vel magnam nisi. Eveniet enim vero perferendis et dolorem est ut non. Et est alias accusamus quasi voluptatem id est. Sed et cumque vitae quisquam.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(12, 1, 'Vel molestias eveniet rerum reprehenderit quae corrupti occaecati voluptatem.', 'dolorum-qui-dolorem-saepe-dolorum-reiciendis-iusto-est', NULL, 'Animi accusantium dolores consequatur provident consectetur tempore. Sint sint quod harum cum laborum. Consequatur iste sed ut quo est voluptas esse.', '<p>Quia qui in et aspernatur totam natus. Ullam sunt velit sit deleniti tempora. Amet est necessitatibus eveniet dicta sapiente blanditiis quasi unde.</p><p>Ut aut maxime mollitia et corrupti asperiores. Quasi deserunt iste ad. In et expedita natus reiciendis.</p><p>Aut nulla est rem ex rerum doloribus. Velit hic expedita hic et et. Perspiciatis nihil cupiditate accusantium est et.</p><p>Laboriosam cupiditate praesentium harum doloremque rerum aperiam maxime. Accusamus officiis nobis veniam doloremque voluptatum qui. A dolore cupiditate consequatur sint ut. Impedit qui qui culpa consequatur voluptas.</p><p>Placeat explicabo explicabo cumque dolores molestiae sit. Neque cupiditate nesciunt culpa unde nobis quisquam et autem. Placeat labore id qui sit.</p><p>Quam ut omnis non quia aut. Magni modi aut eos sunt nihil hic sint sit. Est eum sit sit veniam iure. Ipsam aliquam adipisci id voluptatem.</p><p>Perspiciatis veritatis voluptatem molestiae similique maxime. Et nisi consequatur repudiandae ut. Consequuntur esse voluptatem rerum aut voluptas.</p><p>Quis cupiditate totam nihil qui voluptas consequatur. Corrupti pariatur ipsum et ipsum pariatur rerum. Sed et qui commodi minima. Consectetur neque voluptatem sint maiores aut.</p><p>Consectetur labore et temporibus occaecati. Cupiditate aut incidunt possimus reiciendis omnis. Ducimus odit omnis eaque similique corrupti. Sit pariatur et aliquid reprehenderit ea tempora quam sit.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(13, 3, 'Aut placeat in non facilis ipsum.', 'pariatur-quo-error-harum-voluptates-est-et-molestiae', NULL, 'Et voluptatum voluptate fugit recusandae qui aut maxime. Laboriosam sit assumenda necessitatibus unde molestiae facilis laborum enim. Repellat optio suscipit id aut. Est quibusdam officiis quo sint eos qui.', '<p>Fuga ipsa vel nisi tempora. Assumenda repellat et non autem nobis voluptatem.</p><p>Eos quod aut autem error omnis. Iusto minus possimus ipsum.</p><p>Placeat explicabo dolores et inventore voluptas et. Sunt voluptas eos id harum ut. Qui facilis officiis quos ab quod.</p><p>A qui perferendis ex nihil voluptatum voluptate. Blanditiis et dolorem modi dolorem eaque. Ducimus ipsa quis cupiditate assumenda. Voluptate et provident distinctio porro perferendis quidem et maxime.</p><p>Excepturi molestias totam nobis et cum voluptas. Consequatur molestiae ut sed non enim itaque voluptatem cumque. Molestiae omnis a odit quia et. Itaque ut sunt tempora error.</p><p>Nihil eligendi nesciunt a nobis iusto maxime reprehenderit. Neque magnam tenetur rerum enim molestiae. Nesciunt tempora et consequatur est ipsam delectus. Porro et enim et et.</p><p>Est aperiam expedita voluptate veritatis ut molestiae consequatur. Ipsam pariatur consequuntur est excepturi velit qui nulla. Deleniti ut ab sed ea quidem tempore.</p><p>Sint ad ipsum nemo qui. Vero eos ea ad totam similique. Aliquid doloremque iste totam corporis. Doloremque quis et cupiditate molestiae.</p><p>Id doloremque aperiam laudantium eveniet dolorum optio numquam. Quo totam aut molestiae et. Quis dolorum qui in nesciunt culpa sit harum iusto. Sed vitae aut perferendis cum amet facilis.</p><p>Sunt eos omnis explicabo eveniet consequuntur modi. In non quisquam voluptatibus ex. Dolor molestiae et quaerat qui molestiae. Dolor qui voluptas culpa possimus.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(14, 2, 'Earum sed ducimus deleniti.', 'voluptatem-et-ratione-repudiandae-et-quo', NULL, 'Quaerat odio tempora voluptatem aut nihil. Velit laborum corrupti quia id ab. Expedita sit et et sit nobis voluptas sint. Rerum esse nihil a autem ipsum.', '<p>Voluptatem ipsum est et labore dignissimos. Eveniet commodi at fugiat error velit. Velit harum sed qui numquam perspiciatis aut. Quidem in officia quisquam tempora omnis hic.</p><p>Quia aut id blanditiis perspiciatis quo modi. Voluptas ut ex est saepe excepturi earum qui soluta. Nisi dolor omnis voluptate repellat numquam fugiat. Consequatur iure voluptas eius voluptas quis pariatur.</p><p>Vitae corporis omnis sit doloremque vero sapiente. Architecto cupiditate expedita in aut illum. At fuga ut ipsa quae velit dignissimos totam recusandae.</p><p>Ullam explicabo facilis dolorem provident. Nemo porro voluptatem labore. Adipisci perspiciatis est voluptas. Velit illum eligendi ipsum quisquam et aut.</p><p>Repellat similique delectus porro similique magni quo. Illum quam eum quasi temporibus. Fugit et sint qui dolore.</p><p>Rerum ullam consequatur sit placeat. Asperiores earum velit ullam tempore delectus necessitatibus veniam. Aut mollitia qui placeat natus est. Unde ratione velit ab quos ullam veniam ipsum.</p><p>Ipsam id consectetur accusamus necessitatibus labore. Minima sed repellendus aut quas dicta.</p><p>Quis distinctio voluptas sed facere voluptatem mollitia unde. Qui dolor amet delectus eum consectetur quos quia. Eaque voluptatem aut molestiae nesciunt. Quis accusamus cum sapiente eos quo porro quis nobis. Velit pariatur alias tempore.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(15, 1, 'Cumque animi sit aut nihil libero est quo.', 'quae-mollitia-sed-qui-ut-mollitia', NULL, 'Aperiam voluptas ipsam nemo nobis. Explicabo impedit dolores architecto non et repellat. Quaerat quo ex commodi modi expedita. Voluptatem et dolores dolores molestiae et temporibus perferendis.', '<p>Rerum amet et occaecati reiciendis et ipsa corrupti. Velit minus et quis ut provident id. Atque ipsa quaerat hic laboriosam ad aspernatur. Maiores quia nisi necessitatibus laudantium.</p><p>Non libero aut et dolor minima. Odio molestiae corrupti reiciendis nam. Distinctio voluptatibus aut vel hic omnis unde magni. Sed modi quam sint sed sed. Voluptas quos pariatur atque possimus.</p><p>Quia facilis ipsam rerum possimus. Quis ut quod aut aut autem.</p><p>Sapiente vel quas in est veritatis ipsa error deleniti. Enim veniam aliquam quas aut sed. Ducimus et veniam omnis dignissimos quisquam qui.</p><p>Vel maiores veniam quae voluptatem deleniti. Hic necessitatibus quae id mollitia nam. Ratione autem et aut nam ipsa qui autem sed. Laudantium rerum pariatur excepturi molestiae aut molestias molestiae.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(16, 1, 'Amet sint voluptate facilis.', 'consectetur-cum-tempora-eos', NULL, 'Nemo earum veniam nostrum earum ducimus sed. Debitis consequatur aperiam sit voluptas dolor cumque.', '<p>Dolores dolorem est deserunt deserunt est placeat. Veniam provident reiciendis quia. Adipisci enim ullam est debitis a sit est. Saepe omnis officiis qui.</p><p>Quisquam asperiores praesentium maiores ipsam autem expedita. Vitae tempore voluptatem suscipit aperiam corrupti id modi. Rerum id eligendi nihil aut commodi explicabo fugit. Est eligendi unde exercitationem voluptas architecto atque.</p><p>Totam hic aut laudantium et sunt in sit consequuntur. Iure nostrum aut ut itaque vero aut. Corporis dolores sunt quos eum molestiae nobis. Nam similique beatae in quam veritatis et rerum.</p><p>Assumenda vitae impedit voluptates pariatur repellendus enim natus. Ipsa ducimus harum eum aut. Ea perspiciatis corporis aut dignissimos sit temporibus et. Ipsa consequuntur laudantium in deserunt aliquid.</p><p>Vel et id sit cupiditate aut quaerat. Voluptas sequi sequi nesciunt asperiores et fugiat. Ipsum qui saepe ab vero nesciunt qui. Quia ipsam voluptatem eos consequuntur.</p><p>Voluptatem ipsum magnam sed quibusdam sapiente facilis voluptas sed. Est minima et laboriosam saepe dolorem est rem. Molestias nostrum provident repellendus ut qui.</p><p>In nihil illo voluptatem eos dignissimos beatae nostrum. Rerum eveniet minima autem. Maiores tempore fugiat magni voluptatum.</p><p>Et aut quam in maxime molestiae. Optio vero culpa a incidunt vitae aut doloremque. Autem neque ut et optio.</p><p>Rerum ipsam qui fugit. Pariatur ut sequi necessitatibus illo. Quis incidunt harum corrupti reiciendis sed ratione non est. Nemo ea eos assumenda facere consequatur earum doloremque.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(17, 3, 'Facilis maiores omnis voluptatem voluptate quibusdam repellendus vel.', 'molestiae-molestias-eligendi-voluptate-aut-praesentium', NULL, 'Eum ad nisi culpa distinctio. Numquam laudantium laborum velit minus laborum voluptatum tenetur. Aut modi fugit distinctio quam quo. Nam dolor magni nisi perferendis aliquid deleniti eaque commodi.', '<p>Consequatur a pariatur ut temporibus. Similique officia enim perspiciatis atque. Eveniet recusandae est ad quam iste sint tempore.</p><p>In nemo ducimus sit. Ab eaque ut accusamus perspiciatis sint. Praesentium ut commodi consequatur facere.</p><p>Quos excepturi quia minima eligendi deserunt. Eveniet in rerum deleniti. Esse blanditiis sequi veniam nulla ut in et. Odit numquam doloremque blanditiis qui cum.</p><p>Ad quia eligendi ratione est ipsa odio ut. Soluta minus quia rem aliquam et totam. Dolorem magnam quaerat sint a a omnis.</p><p>Et rerum enim ea quas quod. Aut dolorem officia dolor occaecati. Eius est et voluptates nisi.</p><p>Aut vel excepturi doloribus provident assumenda et incidunt. Est ipsam natus in optio. Voluptas quis voluptatem quia autem.</p><p>Consequatur velit est minus incidunt. Odio voluptatem eveniet voluptates voluptatibus. In numquam sapiente beatae vero enim.</p><p>Sint temporibus magni veniam occaecati. Id excepturi ut quia quo id ab. Fugiat distinctio voluptatibus labore iusto accusantium veniam aut.</p><p>Aut eveniet rem fuga. Eos ut sed atque rem id unde. Debitis accusamus voluptas possimus omnis quae maxime voluptatem. Optio aut rerum molestiae similique.</p><p>Cumque dolorem quia accusantium laudantium explicabo incidunt. Debitis et in et voluptates at dignissimos vel ut. Et deleniti quisquam natus quas et et.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(18, 1, 'Hic laborum beatae incidunt quis.', 'rerum-voluptates-sapiente-excepturi-culpa', NULL, 'Numquam distinctio aut itaque quia repudiandae ad sed. Excepturi sed doloribus in perspiciatis laboriosam minus. Velit iste sunt consectetur molestiae eaque incidunt laboriosam. Neque perspiciatis dolor illo perferendis autem nihil quos.', '<p>Sapiente dolor porro magni enim. Pariatur illum alias repellendus dolorum est. Excepturi quidem et ut soluta eveniet.</p><p>Neque dolorum ut a sed sed sint. Ullam tenetur aspernatur esse qui. Neque quia fuga qui. Rerum adipisci molestiae ut.</p><p>Ut ipsum consequatur possimus culpa id et ab molestias. Cumque et ratione eos ab exercitationem voluptas consequatur dignissimos. Voluptas voluptatibus possimus doloribus veritatis. Iste repudiandae ipsum hic deserunt.</p><p>Repudiandae aspernatur est exercitationem voluptas. Ex libero harum cupiditate quis tenetur atque. Quia id unde maxime dolores id qui consequatur.</p><p>Repudiandae harum non incidunt aliquid. Est ea qui aliquam consequatur ad. Cum sit officiis omnis delectus quae.</p><p>Maxime dignissimos ea in consequatur vel ducimus. Pariatur id saepe ex nesciunt non. Aliquid commodi dignissimos omnis iste quidem.</p><p>Eos eum hic molestiae. Tempora voluptatem in exercitationem dicta quaerat beatae nostrum. Autem et temporibus quasi rem explicabo eligendi eos explicabo.</p><p>Voluptatem quasi velit quis velit est sit labore sit. Fugit qui temporibus impedit asperiores laborum est molestiae. Commodi sed repudiandae enim sint. Autem doloremque est excepturi veniam.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(19, 3, 'Ab fugiat ut.', 'itaque-voluptas-non-eaque-totam-et-reprehenderit', NULL, 'Est voluptas dolor voluptatem placeat ut et. Autem laboriosam est qui sed. Omnis sed et quo occaecati.', '<p>Doloribus iusto repudiandae officiis aperiam rerum voluptatem cupiditate. Porro ab dolorem culpa alias quia omnis id.</p><p>Officia quis magnam laborum voluptatibus perferendis recusandae non fugiat. Praesentium quos deserunt et non voluptatem dolorum fugit quam. Et delectus praesentium delectus tenetur maxime vero ut. Aut qui hic labore sit repellat voluptatem velit.</p><p>Veritatis accusamus quas in non laudantium voluptate cum voluptate. Corrupti et reiciendis nostrum qui nobis reprehenderit. Delectus ea praesentium nihil.</p><p>Saepe corporis numquam eum ea cumque dignissimos dolor. Rerum fugiat ut maiores mollitia. Et illum suscipit vel quasi vero repellat. Perferendis maiores deserunt qui ut dolore delectus pariatur.</p><p>Quibusdam deleniti est id debitis ea laborum. Minima qui rerum quia fugit fuga enim voluptatum. Ea odio id necessitatibus. Fugit qui accusantium aut eveniet vel earum impedit.</p><p>Illo mollitia porro sapiente voluptatibus mollitia facilis. Ad ab id maxime omnis. Consequatur exercitationem possimus magnam sint quae. Quis impedit totam odit qui quia consequuntur facilis.</p><p>Repellat sit laborum consectetur repellat esse sed. Consectetur mollitia et optio qui ipsam dolore vel quo. Velit nihil ut non alias cumque et dolore. Unde libero assumenda dolor deserunt.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(20, 2, 'Adipisci modi commodi odio.', 'blanditiis-ad-eligendi-ex-facilis-id-vero-quia', NULL, 'Expedita voluptatem labore dicta aut expedita. Explicabo culpa soluta voluptatem aut est aut dolores. Delectus rerum illo amet qui. Sapiente tempore reiciendis et cum.', '<p>Facilis ut autem vero voluptatem iste et et. Sed et reprehenderit nesciunt ex nobis voluptatem. Et consequuntur et accusantium optio libero.</p><p>Rem molestias ad assumenda porro assumenda tempora expedita. Ut id libero aut numquam earum quisquam voluptas. Perspiciatis dolores maiores sint nisi dolorem. Veniam culpa voluptas modi voluptatum eum excepturi officia.</p><p>Molestiae vel quae itaque. Vel eos illo nam beatae. Dolorem ut et perspiciatis.</p><p>Quae tempora neque molestias possimus illum ab. Temporibus alias ipsam qui delectus. Fugiat explicabo magnam voluptas. Corrupti accusamus nesciunt dolorem consequatur qui atque dignissimos et.</p><p>Assumenda accusantium nam id facilis. Voluptatem occaecati commodi tempore quo enim molestiae.</p><p>Eum quia cum et vitae ipsam. Voluptate porro hic quo totam. Exercitationem rerum laudantium tempora et.</p>', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(21, 2, 'prabowo subianto', 'prabowo-subianto', 'beritas-images/AEnyMe6lYAXBLCzTtDTED2CBTIZvx3o2T8hmLNOH.jpg', 'Pada tahun 2020, Menteri Pertanian Indonesia, Syahrul Yasin Limpo, mengumumkan rencana pemerintah un...', '<div>Pada tahun 2020, Menteri Pertanian Indonesia, Syahrul Yasin Limpo, mengumumkan rencana pemerintah untuk membangun \"food estate\" di Pulau Kalimantan. Proyek ini merupakan bagian dari inisiatif pemerintah untuk mencapai swasembada pangan dan meningkatkan ketahanan pangan nasional.<br><br>Proyek \"<strong>food estate</strong>\" ini mendapat perhatian khusus karena melibatkan penggunaan lahan gambut yang sensitif secara lingkungan. Pemerintah Indonesia, di bawah kepemimpinan Presiden Joko Widodo, bermitra dengan perusahaan swasta dalam proyek ini, termasuk perusahaan yang dimiliki oleh keluarga Prabowo Subianto, yang saat itu menjabat sebagai Menteri Pertahanan.<br><br>Namun, proyek ini juga menimbulkan kontroversi terkait dampak lingkungan dan sosialnya. Banyak pihak yang khawatir bahwa pengembangan lahan gambut untuk pertanian komersial dapat mengakibatkan kerusakan lingkungan, termasuk masalah kebakaran hutan dan penurunan kualitas lingkungan hidup bagi masyarakat lokal dan ekosistem.<br><br>Pemerintah Indonesia telah menyatakan komitmennya untuk melanjutkan proyek \"food estate\" dengan memperhatikan keberlanjutan lingkungan dan mendengarkan masukan dari berbagai pihak terkait dampak sosial dan lingkungan yang mungkin timbul. Proyek ini terus menjadi topik yang diperbincangkan dalam konteks pembangunan pertanian dan kebijakan lingkungan di Indonesia.</div>', NULL, '2024-03-06 08:39:37', '2024-03-06 08:39:37'),
(22, 1, 'prabowo subianto', 'prabowo-subiantoo', 'Berita-images/MHHd4w77VEpqou7Op1l7UMjiz19hbZcNArcuT7nH.png', 'Pada tahun 2020, Menteri Pertanian Indonesia, Syahrul Yasin Limpo, mengumumkan rencana pemerintah un...', '<div>Pada tahun 2020, Menteri Pertanian Indonesia, Syahrul Yasin Limpo, mengumumkan rencana pemerintah untuk membangun \"food estate\" di Pulau Kalimantan. Proyek ini merupakan bagian dari inisiatif pemerintah untuk mencapai swasembada pangan dan meningkatkan ketahanan pangan nasional.<br><br>Proyek \"<strong>food estate</strong>\" ini mendapat perhatian khusus karena melibatkan penggunaan lahan gambut yang sensitif secara lingkungan. Pemerintah Indonesia, di bawah kepemimpinan Presiden Joko Widodo, bermitra dengan perusahaan swasta dalam proyek ini, termasuk perusahaan yang dimiliki oleh keluarga Prabowo Subianto, yang saat itu menjabat sebagai Menteri Pertahanan.<br><br>Namun, proyek ini juga menimbulkan kontroversi terkait dampak lingkungan dan sosialnya. Banyak pihak yang khawatir bahwa pengembangan lahan gambut untuk pertanian komersial dapat mengakibatkan kerusakan lingkungan, termasuk masalah kebakaran hutan dan penurunan kualitas lingkungan hidup bagi masyarakat lokal dan ekosistem.<br><br>Pemerintah Indonesia telah menyatakan komitmennya untuk melanjutkan proyek \"food estate\" dengan memperhatikan keberlanjutan lingkungan dan mendengarkan masukan dari berbagai pihak terkait dampak sosial dan lingkungan yang mungkin timbul. Proyek ini terus menjadi topik yang diperbincangkan dalam konteks pembangunan pertanian dan kebijakan lingkungan di Indonesia.</div>', NULL, '2024-03-06 08:51:26', '2024-03-06 09:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `brandings`
--

CREATE TABLE `brandings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portal` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `logo_sb` varchar(255) DEFAULT NULL,
  `published_it` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brandings`
--

INSERT INTO `brandings` (`id`, `portal`, `slug`, `alamat`, `deskripsi`, `link`, `status`, `logo_sb`, `published_it`, `created_at`, `updated_at`) VALUES
(1, 'PT Marbun Ramadan', 'quae-sit-recusandae-repellat', 'Jln. Ters. Kiaracondong No. 455, Cimahi 54016, Sumut', 'Alice thought to herself. At this moment the door and found that it ought to eat or drink something or other; but the Dodo had paused as if it had been. But her sister sat still just as usual.', 'samosir.info', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\6996f5ba2cf10f02764bdac904ed9bc4.png', NULL, '2024-03-06 06:39:54', '2024-03-06 06:39:54'),
(2, 'Perum Waskita', 'ut-est-possimus-deserunt-nemo-maiores-illum', 'Ki. Sutarto No. 799, Tebing Tinggi 39891, Kepri', 'Alice said very politely, \'if I had it written up somewhere.\' Down, down, down. Would the fall NEVER come to the Dormouse, and repeated her question. \'Why did you manage on the back. However, it was.', 'habibi.my.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\037048b35bfd75a24d2222cb1b998270.png', NULL, '2024-03-06 06:39:54', '2024-03-06 06:39:54'),
(3, 'UD Lailasari Megantara (Persero) Tbk', 'pariatur-laboriosam-dolorem-molestiae-dolores-modi-eveniet-et', 'Ds. Zamrud No. 601, Jambi 55158, NTT', 'I must, I must,\' the King repeated angrily, \'or I\'ll have you executed, whether you\'re nervous or not.\' \'I\'m a poor man, your Majesty,\' he began. \'You\'re a very difficult question. However, at last.', 'purnawati.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\a19890c056115c4af0abe7986d3a76f7.png', NULL, '2024-03-06 06:39:54', '2024-03-06 06:39:54'),
(4, 'Perum Namaga Tbk', 'sequi-voluptatem-placeat-corporis', 'Jr. Wora Wari No. 569, Bau-Bau 89054, Papua', 'I wish you wouldn\'t keep appearing and vanishing so suddenly: you make one quite giddy.\' \'All right,\' said the Gryphon. \'Of course,\' the Gryphon replied rather crossly: \'of course you know what.', 'wahyuni.desa.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\9101415d75709b9f868ae0f5a7bbc7b1.png', NULL, '2024-03-06 06:39:54', '2024-03-06 06:39:54'),
(5, 'UD Utami Tbk', 'iste-fuga-expedita-qui-enim', 'Jr. Abdul. Muis No. 558, Singkawang 13658, Sumsel', 'So they got their tails in their mouths. So they couldn\'t get them out of the mushroom, and her face in her brother\'s Latin Grammar, \'A mouse--of a mouse--to a mouse--a mouse--O mouse!\') The Mouse.', 'rahayu.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\e3e6cff350b00a56e000a29257b7759d.png', NULL, '2024-03-06 06:39:54', '2024-03-06 06:39:54'),
(6, 'Yayasan Marpaung', 'magni-id-explicabo-praesentium-impedit-sed-dolorem', 'Gg. Moch. Toha No. 500, Sungai Penuh 17596, NTB', 'I\'m angry. Therefore I\'m mad.\' \'I call it sad?\' And she kept fanning herself all the time he had come back again, and looking anxiously about her. \'Oh, do let me help to undo it!\' \'I shall sit.', 'susanti.com', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\fafa9483ca00b308f448fe970413aa26.png', NULL, '2024-03-06 06:39:54', '2024-03-06 06:39:54'),
(7, 'Perum Prasasta (Persero) Tbk', 'autem-autem-et-hic-non-aut-ullam', 'Gg. Badak No. 757, Administrasi Jakarta Timur 22595, Kalteng', 'Five, who had meanwhile been examining the roses. \'Off with his tea spoon at the corners: next the ten courtiers; these were ornamented all over crumbs.\' \'You\'re wrong about the whiting!\' \'Oh, as to.', 'narpati.go.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\b000813f2d952467f1a2d227ec428214.png', NULL, '2024-03-06 06:39:54', '2024-03-06 06:39:54'),
(8, 'Perum Oktaviani Mustofa Tbk', 'modi-quia-quibusdam-qui-excepturi-facilis-velit-asperiores', 'Ki. Bank Dagang Negara No. 503, Payakumbuh 81005, Kaltim', 'The judge, by the prisoner to--to somebody.\' \'It must be growing small again.\' She got up in great disgust, and walked a little more conversation with her head!\' the Queen said--\' \'Get to your.', 'andriani.biz.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\d523a5c675dfeb7f7cb05d52dbc3c587.png', NULL, '2024-03-06 06:39:54', '2024-03-06 06:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, '(Persero) Tbk', 'inventore-iste-cum-tempore-qui-fugiat-voluptatem-deserunt', '2024-03-06 06:38:49', '2024-03-06 06:38:49'),
(2, 'Tbk', 'autem-est-dignissimos-minus-aliquid-eveniet', '2024-03-06 06:38:49', '2024-03-06 06:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `economies`
--

CREATE TABLE `economies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portal` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `logo_se` varchar(255) DEFAULT NULL,
  `published_it` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `economies`
--

INSERT INTO `economies` (`id`, `portal`, `slug`, `alamat`, `deskripsi`, `link`, `status`, `logo_se`, `published_it`, `created_at`, `updated_at`) VALUES
(1, 'Perum Damanik', 'quia-vel-commodi-iure-temporibus-hic', 'Jr. Lembong No. 375, Binjai 12215, Bali', 'I shall never get to twenty at that rate! However, the Multiplication Table doesn\'t signify: let\'s try the patience of an oyster!\' \'I wish the creatures wouldn\'t be so kind,\' Alice replied, so.', 'utami.name', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\32fe6da2c0986c744bbea824512bf7ee.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(2, 'PD Winarsih Tbk', 'quidem-qui-amet-id-magni-nulla', 'Psr. Gotong Royong No. 372, Sungai Penuh 90230, Kalbar', 'King said gravely, \'and go on till you come to an end! \'I wonder what you\'re doing!\' cried Alice, quite forgetting in the sea, some children digging in the distance, and she felt unhappy. \'It was.', 'purnawati.sch.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\97d111ae55ab5b10cd39eb895fe9ebc0.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(3, 'PJ Jailani Padmasari Tbk', 'consequatur-aliquid-quo-amet-molestiae-molestiae', 'Gg. Honggowongso No. 147, Batam 88062, Sulbar', 'I ever heard!\' \'Yes, I think I could, if I fell off the mushroom, and her eyes to see it trying in a tone of great surprise. \'Of course they were\', said the Hatter, \'you wouldn\'t talk about.', 'pranowo.tv', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\910542d87a8c637521cc539eec1cb886.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(4, 'PJ Yuniar Novitasari', 'et-cupiditate-minus-earum', 'Jr. Bappenas No. 433, Padangsidempuan 81476, Jambi', 'Alice put down yet, before the officer could get to twenty at that rate! However, the Multiplication Table doesn\'t signify: let\'s try the thing at all. However, \'jury-men\' would have appeared to.', 'mulyani.go.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\0027e473084f6717240aa1d7d48f4fe6.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(5, 'Fa Winarsih Wibowo (Persero) Tbk', 'fugit-repellat-magnam-adipisci-et-dignissimos-aut', 'Dk. Imam Bonjol No. 39, Salatiga 35114, NTB', 'I\'m somebody else\"--but, oh dear!\' cried Alice, quite forgetting her promise. \'Treacle,\' said the King eagerly, and he poured a little hot tea upon its nose. The Dormouse slowly opened his eyes. He.', 'firmansyah.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c67411c70f8bd020f99f61df927b4afe.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(6, 'UD Farida Hardiansyah', 'necessitatibus-molestias-placeat-dolor-necessitatibus-aut-iste-quaerat-accusamus', 'Ki. Muwardi No. 121, Surakarta 91975, Banten', 'So she called softly after it, never once considering how in the after-time, be herself a grown woman; and how she would keep, through all her life. Indeed, she had drunk half the bottle, saying to.', 'widiastuti.in', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\55efbf8f0d67e00e5faa136cd80cea6c.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(7, 'PT Natsir (Persero) Tbk', 'fugiat-et-non-rerum-numquam-dolor-et', 'Jr. Untung Suropati No. 917, Banjarbaru 58837, NTB', 'I\'ll look first,\' she said, \'for her hair goes in such long curly brown hair! And it\'ll fetch things when you have to whisper a hint to Time, and round Alice, every now and then; such as, \'Sure, I.', 'sitorus.name', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\dadd3a69ece52dc5bc46cc96aceb3e5b.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(8, 'PD Nugroho Iswahyudi Tbk', 'voluptatem-saepe-ut-accusantium-fugit-quia-quam-rerum', 'Ki. Bara No. 191, Bekasi 52328, Sulsel', 'Dormouse,\' the Queen shrieked out. \'Behead that Dormouse! Turn that Dormouse out of the Queen jumped up on to the three gardeners at it, busily painting them red. Alice thought decidedly uncivil.', 'permata.web.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\b20447d651016a0b8a8bf8965bbf645f.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(9, 'PD Winarsih Habibi (Persero) Tbk', 'qui-vitae-saepe-dolorem-optio-voluptate-dolores', 'Jr. Babadan No. 664, Tanjung Pinang 14191, DIY', 'Alice. \'Why not?\' said the Dodo had paused as if it likes.\' \'I\'d rather finish my tea,\' said the King, and the executioner went off like an honest man.\' There was a little animal (she couldn\'t guess.', 'dabukke.biz', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\a7d356415ad51149750f05e5740bca06.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14'),
(10, 'PD Susanti Nasyidah', 'dignissimos-quis-id-eligendi-vitae', 'Dk. Babadak No. 691, Banjarmasin 47746, Kaltara', 'Alice, and tried to open them again, and the m--\' But here, to Alice\'s side as she left her, leaning her head impatiently; and, turning to the door, staring stupidly up into the loveliest garden you.', 'prayoga.mil.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\58b781a4cc0a925c7602163fc6f025ff.png', NULL, '2024-03-06 06:40:14', '2024-03-06 06:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `environments`
--

CREATE TABLE `environments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portal` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `logo_se` varchar(255) DEFAULT NULL,
  `published_it` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `environments`
--

INSERT INTO `environments` (`id`, `portal`, `slug`, `alamat`, `deskripsi`, `link`, `status`, `logo_se`, `published_it`, `created_at`, `updated_at`) VALUES
(1, 'Fa Mangunsong (Persero) Tbk', 'ipsam-distinctio-aperiam-laborum-ex', 'Jln. Merdeka No. 453, Pontianak 28205, Sulsel', 'Beautiful, beautiful Soup!\' CHAPTER XI. Who Stole the Tarts? The King turned pale, and shut his eyes.--\'Tell her about the crumbs,\' said the King, \'or I\'ll have you got in as well,\' the Hatter.', 'saragih.ac.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\55177f6f5b4eb65a1ca5d83bfc41e463.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(2, 'Fa Simbolon Rajata', 'unde-qui-porro-consectetur-expedita-fugit', 'Gg. Ikan No. 531, Batam 79371, Kalteng', 'AT ALL. Soup does very well without--Maybe it\'s always pepper that makes people hot-tempered,\' she went on, yawning and rubbing its eyes, \'Of course, of course; just what I see\"!\' \'You might just as.', 'gunarto.net', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\2e83176d500e536a9d5df12f1705d130.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(3, 'CV Sihombing', 'quae-debitis-dolorum-dignissimos-qui-quas-rerum', 'Ki. Sudirman No. 470, Denpasar 66307, Jabar', 'Alice had got so much about a whiting to a shriek, \'and just as well she might, what a delightful thing a bit!\' said the youth, \'and your jaws are too weak For anything tougher than suet; Yet you.', 'rajata.info', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\8dd259ee818c6def176ef09af8f7d799.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(4, 'Fa Budiman Tbk', 'ut-voluptas-et-at-quibusdam-suscipit-quam-quam', 'Gg. Raden Saleh No. 877, Batu 56243, Kalbar', 'Alice. \'Nothing WHATEVER?\' persisted the King. \'When did you manage to do with this creature when I get it home?\' when it grunted again, and made another snatch in the distance. \'And yet what a.', 'tarihoran.com', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\45236b05dc9257aa5af18b8045572b45.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(5, 'UD Wijayanti Widiastuti', 'nihil-tempora-odit-impedit-et-vitae-optio', 'Ki. Gatot Subroto No. 830, Pasuruan 57475, Sultra', 'Mouse, getting up and leave the court; but on second thoughts she decided to remain where she was nine feet high. \'I wish I hadn\'t cried so much!\' said Alice, in a confused way, \'Prizes! Prizes!\'.', 'melani.com', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\b2d6f30e7040809f65841d9daaf12756.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(6, 'Fa Rajata Usada (Persero) Tbk', 'nulla-unde-modi-dolores-magnam-deleniti-corrupti-aut', 'Ki. Dr. Junjunan No. 882, Bukittinggi 89597, DIY', 'Pat, what\'s that in the schoolroom, and though this was his first remark, \'It was much pleasanter at home,\' thought poor Alice, that she had a VERY turn-up nose, much more like a serpent. She had.', 'laksmiwati.my.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c4087e1d172905ca4349c616a6ffc16e.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(7, 'PT Lailasari Santoso', 'minus-accusantium-fugit-et-rerum-earum-quia', 'Jr. Ir. H. Juanda No. 825, Kediri 89158, Malut', 'Magpie began wrapping itself up very sulkily and crossed over to the Mock Turtle said: \'no wise fish would go through,\' thought poor Alice, \'when one wasn\'t always growing larger and smaller, and.', 'rajasa.org', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\90eba34bf216c1c23f7ecf2ae655becb.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(8, 'PT Dabukke Latupono Tbk', 'dolorum-ullam-aut-vel-dolores-eligendi-architecto', 'Jln. Bak Air No. 449, Pariaman 86275, Maluku', 'Two. Two began in a game of play with a soldier on each side, and opened their eyes and mouths so VERY wide, but she thought it over afterwards, it occurred to her usual height. It was the first to.', 'yolanda.co', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\7c8272fbbaa475234e03657fc49a009d.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(9, 'PJ Rahmawati Tbk', 'numquam-quasi-corporis-sunt-doloremque-saepe', 'Dk. Asia Afrika No. 50, Pekanbaru 99134, Sulbar', 'For, you see, Miss, we\'re doing our best, afore she comes, to--\' At this the whole she thought it had a head unless there was not a regular rule: you invented it just missed her. Alice caught the.', 'tampubolon.biz', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\1c1ac48afe07b7e655841e76bc128c92.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(10, 'UD Hariyah', 'nesciunt-rerum-ea-et-libero-sapiente', 'Psr. Barat No. 29, Cirebon 93497, Kalsel', 'Hatter instead!\' CHAPTER VII. A Mad Tea-Party There was nothing else to do, so Alice soon came to the three gardeners at it, busily painting them red. Alice thought she had a wink of sleep these.', 'natsir.my.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\490ed18566644565ec5500930fb285f5.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(11, 'CV Pratiwi Safitri', 'aspernatur-dolor-aliquam-provident-tempora-id-quia', 'Jln. Baranang Siang No. 941, Sorong 76391, NTB', 'Caterpillar angrily, rearing itself upright as it could go, and making quite a long hookah, and taking not the smallest idea how confusing it is almost certain to disagree with you, sooner or later.', 'lailasari.org', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\710a9cf161c0d790b1036ad5e9a50981.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(12, 'PD Hasanah', 'qui-velit-ea-quos-adipisci-animi-ipsam', 'Ki. Basudewo No. 697, Tual 45616, Kalsel', 'CHAPTER XII. Alice\'s Evidence \'Here!\' cried Alice, with a trumpet in one hand and a fall, and a fall, and a long tail, certainly,\' said Alice as he could go. Alice took up the fan and the small ones.', 'nasyidah.biz', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\49ff8c7033aabfd07ab44ddb32f5ebb1.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(13, 'Fa Novitasari Andriani', 'id-aut-a-est-a-voluptatem-autem-consectetur', 'Jr. Gajah Mada No. 922, Administrasi Jakarta Barat 61238, Sultra', 'Alice)--\'and perhaps you haven\'t found it very nice, (it had, in fact, a sort of lullaby to it in time,\' said the Gryphon. \'--you advance twice--\' \'Each with a pair of boots every Christmas.\' And.', 'mardhiyah.sch.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\976abbbe45d1de980b2f811e73e123d2.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(14, 'UD Yuniar (Persero) Tbk', 'accusamus-sed-voluptas-consectetur', 'Psr. Yap Tjwan Bing No. 697, Pariaman 22698, Sulut', 'Alice as she did not venture to ask his neighbour to tell me who YOU are, first.\' \'Why?\' said the Hatter, \'you wouldn\'t talk about cats or dogs either, if you like,\' said the White Rabbit with pink.', 'utama.info', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\43de21fe97f21df62e0cc059988654e3.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(15, 'Yayasan Hastuti Safitri', 'vel-non-sunt-asperiores-ea-rem', 'Ki. Basket No. 718, Pontianak 49245, Sulteng', 'I could let you out, you know.\' \'Not at all,\' said the King, who had followed him into the court, without even waiting to put it right; \'not that it was certainly too much overcome to do it?\' \'In my.', 'suryono.tv', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\ff79a659f32ba7bb8268fde1e824a3e5.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(16, 'Perum Mayasari Tbk', 'id-corrupti-non-mollitia-eum-veniam-molestias', 'Jr. B.Agam Dlm No. 779, Padangsidempuan 85235, Sumsel', 'The Antipathies, I think--\' (she was rather glad there WAS no one listening, this time, and was suppressed. \'Come, that finished the guinea-pigs!\' thought Alice. \'Now we shall have to go down--Here.', 'prasasta.name', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\07de9075720c8c5128bdbf57c272fbed.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(17, 'Yayasan Mayasari Nasyiah (Persero) Tbk', 'sit-nihil-doloremque-sunt-dolorem-voluptas-officiis-quia', 'Dk. Wora Wari No. 120, Palu 60290, NTT', 'The cook threw a frying-pan after her as hard as she wandered about in a minute. Alice began to get out again. That\'s all.\' \'Thank you,\' said the Duchess. An invitation from the shock of being.', 'yulianti.my.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\5d215369d79da2b16e6f57c976dab8a8.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(18, 'PD Pudjiastuti (Persero) Tbk', 'et-inventore-quaerat-ea-provident-possimus', 'Jr. Camar No. 321, Tangerang Selatan 85921, Aceh', 'I think?\' \'I had NOT!\' cried the Mouse, in a great interest in questions of eating and drinking. \'They lived on treacle,\' said the Cat, as soon as look at me like a steam-engine when she turned the.', 'riyanti.info', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\445d0aec5adfd278afc94cddb89ab919.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(19, 'UD Saefullah Sitompul', 'nam-non-amet-perferendis-fugit-sunt-officia-alias-ab', 'Ki. Jend. A. Yani No. 863, Jambi 49438, Banten', 'MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'Why not?\' said the Mock Turtle, \'but if you\'ve seen them at dinn--\' she checked herself hastily. \'I thought you did,\' said the Mock.', 'puspita.mil.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\3763261a20842eca2c7ca6e42d3a333c.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(20, 'UD Maryadi Yulianti', 'magnam-officia-debitis-ducimus-tempora-sunt-molestiae-aut', 'Jr. Warga No. 924, Lubuklinggau 91874, NTT', 'King was the Hatter. Alice felt that she could not be denied, so she turned to the table, half hoping that they could not remember ever having seen such a capital one for catching mice you can\'t.', 'kusmawati.net', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\e3bcef36bc90662b78d91e3657ddca3a.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(21, 'PD Sihotang Hutapea', 'voluptatem-sit-odit-ut-dolorum-maxime', 'Dk. Batako No. 377, Kediri 93094, Pabar', 'I think?\' he said in a frightened tone. \'The Queen will hear you! You see, she came up to her usual height. It was high time you were down here till I\'m somebody else\"--but, oh dear!\' cried Alice.', 'suryatmi.web.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\604a3d09ca23430d64cea06046f882ad.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(22, 'PD Natsir Pudjiastuti', 'aliquam-maiores-aliquam-voluptas-voluptatem', 'Psr. Sutoyo No. 813, Jayapura 63568, Bengkulu', 'King had said that day. \'A likely story indeed!\' said the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. He looked at Alice. \'It must have imitated somebody else\'s.', 'winarsih.asia', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\930442d6c21b291e0ca7548ac6be7104.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(23, 'UD Saragih', 'consequatur-saepe-qui-id-quidem-repudiandae-nihil-quis-commodi', 'Ds. Baing No. 106, Cirebon 51272, Lampung', 'French mouse, come over with fright. \'Oh, I beg your pardon,\' said Alice indignantly. \'Let me alone!\' \'Serpent, I say again!\' repeated the Pigeon, raising its voice to a shriek, \'and just as she.', 'prasasta.biz.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\5cfa382e72132f134936d323c32fc372.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(24, 'CV Handayani Farida (Persero) Tbk', 'quo-numquam-ipsa-magni-eum', 'Ki. Salatiga No. 689, Solok 54973, Papua', 'Alice, and she sat down again in a frightened tone. \'The Queen of Hearts, and I don\'t think,\' Alice went on, \'you see, a dog growls when it\'s angry, and wags its tail when it\'s angry, and wags its.', 'waskita.my.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\5c8c257c22e8464f30f9b5291cade708.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(25, 'PJ Halim', 'consequatur-ipsam-ullam-sapiente-ipsum-cupiditate', 'Ds. Bank Dagang Negara No. 295, Batam 14558, Riau', 'Mock Turtle recovered his voice, and, with tears running down his cheeks, he went on, spreading out the proper way of speaking to a mouse: she had nothing yet,\' Alice replied very politely, feeling.', 'susanti.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\7c681e7b177aea4b2cd7b40c63d2d12b.png', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `governances`
--

CREATE TABLE `governances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `portal` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `link` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `logo_sg` varchar(255) DEFAULT NULL,
  `published_it` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `governances`
--

INSERT INTO `governances` (`id`, `category_id`, `portal`, `slug`, `alamat`, `deskripsi`, `link`, `status`, `logo_sg`, `published_it`, `created_at`, `updated_at`) VALUES
(1, 2, 'UD Sihombing Marpaung (Persero) Tbk', 'est-eum-aperiam-ipsa-ut-cumque-a', 'Jln. Basudewo No. 733, Pasuruan 21073, Sulteng', '<div>Ea nostrum et dolores magni porro autem labore. Exercitationem voluptas necessitatibus natus sit accusamus. Ipsam ad quia eos veniam sed voluptas.<br><br></div><div>Voluptas sunt earum suscipit possimus praesentium vitae quia. Libero fuga nihil quasi in labore veritatis adipisci. Occaecati et exercitationem quas error deleniti. Voluptatem quis esse voluptatem quae molestiae ducimus totam.<br><br></div><div>Cum aliquam soluta cupiditate ea voluptatibus cum saepe. Neque odit quasi eos quia. Quidem quas minus sequi nobis.<br><br></div>', 'https://getbootstrap.com/docs/4.0/components/buttons/', 'Active', 'governance-images/dxsiVrLTTdkINd7MbW0fgrBxS0vYz3ha1eiWvAOA.png', NULL, '2024-03-06 06:39:40', '2024-03-07 01:40:06'),
(2, 2, 'Perum Farida Riyanti', 'dolorem-atque-minus-mollitia-dolore-voluptas-quo-quia', 'Jr. Thamrin No. 31, Balikpapan 96241, NTT', '<p>Et maxime et pariatur asperiores porro. Nobis quia est magnam voluptatum consequatur ut quia. Voluptates ut nihil accusamus et blanditiis. Ea ut excepturi voluptatem ipsam et sequi.</p><p>Est est est deserunt sit enim. Est enim suscipit mollitia in corporis voluptatem corporis. Soluta rerum magni nostrum.</p><p>Consectetur adipisci sunt error vel est. Voluptas mollitia earum provident id nam. Impedit tempore provident doloremque incidunt aut. Nihil sunt eveniet cumque sit omnis explicabo.</p>', 'pudjiastuti.com', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\5cb956ba8bf7699b94543df1fd046f09.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(3, 2, 'PT Hassanah (Persero) Tbk', 'voluptatem-quae-quod-provident-quisquam-quo-rerum', 'Dk. Barasak No. 187, Pangkal Pinang 67637, Malut', '<p>Expedita voluptas veniam aliquid. Sit odio placeat et eos fugiat est. Soluta debitis hic iusto accusamus quia qui. Explicabo ducimus doloremque sint rerum quam sit quidem. Nostrum quisquam voluptatem est qui.</p><p>Inventore ullam voluptatem nulla velit sint non. Modi eveniet quos ut voluptas ab enim. Distinctio quidem recusandae et. Facilis eaque modi voluptatibus explicabo ipsa. Dicta aperiam et qui sint impedit dolores aut rerum.</p>', 'halimah.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\f1a4c7c67b2212562a13d5bdbf6ae98e.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(4, 2, 'PD Rahmawati', 'suscipit-ipsam-tempora-dicta-dolore-ipsum-id-praesentium', 'Ki. Panjaitan No. 36, Tangerang 52616, Maluku', '<p>Eveniet placeat asperiores aut non consectetur ullam iure. Possimus temporibus qui sint reprehenderit et quas facere. Expedita minima iusto distinctio delectus nesciunt laborum. Sunt nihil eum blanditiis eum.</p><p>Illo voluptates atque non rerum ut. Rerum fugit et qui error. Rerum et non voluptatem iusto possimus dolores dolores perferendis. Qui illo optio commodi sit quisquam accusamus nobis. Sed aut qui natus veritatis officia dolorem.</p><p>Incidunt qui sit sapiente omnis. Et soluta ipsam et natus beatae. Quia asperiores perspiciatis facilis sequi. Eos animi unde inventore libero aut. Ut aut ut beatae dolor qui assumenda.</p>', 'anggriawan.tv', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\fd2efae925f3fe73a9a80942c8e592b3.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(5, 1, 'UD Sihotang Halim', 'sit-sit-cupiditate-officia-dolores-tempore', 'Ki. Ahmad Dahlan No. 721, Malang 72754, Sulteng', '<p>Consequuntur error sed placeat ullam. Laboriosam eum rerum quas quos eos laudantium rerum. Quidem et quia neque corporis blanditiis nulla. Qui fuga aut eos non modi.</p><p>Sunt unde voluptatem ut maxime tenetur. Sit quo repellendus doloremque sit. Iusto aut maxime perferendis dolorem nam. Ut pariatur et autem ad commodi id.</p><p>Enim voluptatibus excepturi alias ea tenetur consectetur. Enim adipisci aliquid sed doloremque omnis voluptas quas. Sunt voluptates aut praesentium non autem et odio. Odio nobis provident consectetur voluptatibus et rem.</p>', 'novitasari.my.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\35de5327ea14d06994079bea74421194.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(6, 2, 'PJ Kusmawati', 'id-voluptatibus-ut-quos-occaecati', 'Gg. Elang No. 43, Bima 60224, Maluku', '<p>Sit rem sed eum explicabo vel. Laborum at ut sunt ut odit non. Possimus repellendus qui voluptatem eum et facere et. Natus sit assumenda impedit architecto labore cum aut reiciendis.</p><p>Velit quis sapiente laboriosam unde est. Voluptatem ipsa voluptatibus quia est consequatur eaque aut. Soluta nesciunt ducimus placeat aut eos aut. Et illum earum quasi explicabo.</p><p>Reprehenderit quaerat provident quidem ut earum laborum magni. Consequatur culpa reprehenderit dolor asperiores. Et earum laboriosam ullam aliquid unde.</p>', 'prasetya.org', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c94e89e3d89130b1dbf53cd3ea789b65.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(7, 1, 'UD Siregar', 'quibusdam-non-illum-omnis-similique', 'Ki. Bahagia  No. 463, Palembang 77035, Gorontalo', '<p>Sit inventore omnis quasi consequatur. Laudantium iure molestiae quos blanditiis adipisci nihil. Expedita unde neque illum iusto. Tempora ratione eum odio at officiis neque ipsa qui.</p><p>Voluptatem deserunt non voluptas consequatur rem voluptates aliquid. Delectus vero molestiae esse et. Facilis adipisci minima sit eveniet inventore modi. Commodi debitis nihil ducimus.</p><p>Iste ea iure debitis dolores eligendi. Id aut quo quia sed dolores. Blanditiis omnis ducimus aut omnis earum totam dolorem. A inventore quaerat harum aut soluta odio praesentium atque.</p>', 'ardianto.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\68b8a5d01ee96a197675ec23f0b31fae.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(8, 1, 'Perum Prastuti (Persero) Tbk', 'harum-similique-voluptatum-totam-non-quo-esse', 'Gg. Sugiyopranoto No. 434, Bima 57592, Jateng', '<p>Debitis veritatis delectus incidunt ullam fugiat sed asperiores. Quisquam et dolores quidem numquam veritatis. Beatae et nulla corporis nam eveniet. Distinctio quia omnis dicta dicta neque non.</p><p>Aut non similique eos. Optio pariatur fugit dolor porro unde aut. Sit illum voluptatibus ipsam ullam animi dolores iure. Et quod et laboriosam sit.</p>', 'pranowo.net', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\19d41c0e7813acb7e09a550b004aca8d.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(9, 1, 'Yayasan Sitompul Haryanti', 'numquam-nam-consectetur-recusandae', 'Ds. Pasteur No. 834, Metro 17994, Sumbar', '<p>Reprehenderit possimus facere quas assumenda. Aliquid in veniam voluptatem tempora. Consequatur magni nulla aliquam corporis saepe aut est. Nulla porro deserunt omnis perferendis.</p><p>Non provident eos qui voluptatem. Id eligendi voluptas accusamus ut fugiat. Tempore molestiae non dolores.</p><p>Itaque eaque nulla rerum itaque. Deleniti libero nam accusamus vero aperiam alias reprehenderit.</p>', 'fujiati.net', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\67c6103f8edabe28c43f0c5e9a38e3c5.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(10, 1, 'Yayasan Hasanah Nugroho (Persero) Tbk', 'est-eum-culpa-aliquam-sunt', 'Jr. Dago No. 67, Administrasi Jakarta Utara 53647, Gorontalo', '<p>Consequatur aut expedita earum hic doloremque eaque. Aliquid eius sunt soluta qui consequatur impedit ullam. Magnam nostrum sit quod iure.</p><p>Rerum cum reprehenderit maiores id dignissimos veniam corrupti cum. Tempora nostrum necessitatibus voluptates enim consequatur explicabo. Modi omnis et quo optio. Sint veniam nam earum reiciendis.</p>', 'aryani.biz', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\28c3f4ef797c48312e2ffa4196bc7d1a.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(11, 2, 'CV Maheswara Oktaviani', 'distinctio-officiis-ad-aut-voluptates-totam-officia', 'Gg. Bakti No. 639, Sukabumi 47544, Kalsel', '<p>Qui suscipit rerum voluptates. Quis qui et nesciunt odio consectetur. Ut voluptatem consequatur explicabo modi in a enim.</p><p>Ut dolorem odit neque voluptatem. Reprehenderit aspernatur id minus deserunt quos voluptatem reiciendis.</p><p>Magnam dolorem eos sint unde quae temporibus et. Cumque at id rerum exercitationem veniam distinctio fuga.</p>', 'permadi.sch.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\392c3fbd407b0ddfd389595f87dad8ba.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(12, 2, 'CV Aryani', 'repellendus-eos-est-maiores-veritatis-ducimus', 'Dk. Gedebage Selatan No. 196, Lubuklinggau 62788, Sumut', '<p>Dolores ea rerum ut quae minus. Sit corporis iure architecto est quam eius deleniti. Odit possimus fugiat aut omnis quia.</p><p>Aut neque vel sunt repudiandae labore at nisi. Voluptatem ut explicabo et qui error consequuntur. Sunt provident earum at velit esse recusandae eveniet.</p>', 'maulana.name', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\97d5047c01e5af409d05a80d497bdb13.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(13, 2, 'Perum Wastuti (Persero) Tbk', 'ut-est-consequatur-et-vero', 'Ds. Ahmad Dahlan No. 271, Tasikmalaya 82640, Sumbar', '<p>Incidunt incidunt tenetur hic ut distinctio. Explicabo minus voluptatem iure facilis. Voluptatem adipisci neque eaque cumque enim nemo ducimus.</p><p>Voluptate temporibus voluptatem reprehenderit possimus. Esse in minus vitae repellat. Rerum omnis ut asperiores perspiciatis.</p><p>Dolorum cum ut praesentium in sunt delectus. Maiores labore sit provident unde porro. Quibusdam reiciendis iure qui laboriosam reprehenderit unde.</p>', 'suartini.name', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\6a9f43f50ffb4a2a3412c612ade0f5bd.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(14, 2, 'UD Halimah Suryatmi (Persero) Tbk', 'eos-enim-ut-placeat-modi-reiciendis-aperiam-qui-veritatis', 'Jln. W.R. Supratman No. 134, Bitung 50048, Sulut', '<p>Velit sit autem id temporibus maiores. Quis eum ut minus est reprehenderit velit. Et rerum sit non sapiente. Omnis adipisci consequuntur voluptatem sapiente et aliquid cum ut.</p><p>Eaque vero molestiae ut nostrum magnam fugit atque quod. Adipisci minima aliquid quam ratione rerum ducimus atque non. Enim vel omnis reprehenderit quas aut. Labore voluptatem voluptas facilis quod. Soluta saepe perferendis voluptates ea dolores.</p>', 'widodo.co', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c794bb6b986f30a6bce3fef48a97fece.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(15, 1, 'CV Mardhiyah Tbk', 'nisi-totam-eligendi-animi-et-molestias', 'Psr. Panjaitan No. 66, Singkawang 73704, Sumsel', '<p>Qui quis sunt corporis expedita dolorum quia fugiat omnis. Porro cupiditate nulla voluptatem hic sequi. Rem corrupti ut assumenda. Magni et consequatur placeat eum quo atque.</p><p>Odio officia sunt repellat suscipit libero facilis officiis. Illum sed amet occaecati reprehenderit. Tempore sapiente laboriosam in placeat consequuntur sit.</p>', 'utama.tv', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\d87dd0c126c74f433486195edcb33565.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(16, 1, 'Yayasan Andriani Wastuti (Persero) Tbk', 'exercitationem-libero-placeat-sed-odit', 'Psr. Baha No. 113, Subulussalam 53616, Sulteng', '<p>Libero maxime pariatur vero veritatis. Eveniet quaerat facere exercitationem eius. Voluptatum doloremque incidunt ipsa ut cumque. Quos et dolor quia magnam minima praesentium soluta.</p><p>Est sunt facere tenetur modi. Ipsa ad eos maxime repellat. Et molestiae sit exercitationem omnis doloribus excepturi. Ut velit officia maiores dolor aut consequatur est. In eum quis qui ullam consequatur.</p><p>Voluptas voluptatum voluptas est. Ut laborum sit voluptas neque aut dolorem veritatis. Voluptatem voluptas ea et aut ipsam deleniti quaerat ut.</p>', 'nainggolan.or.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\837a99d4560cde67fe0d7cc5767c0f94.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(17, 2, 'PD Mandala Nurdiyanti Tbk', 'et-a-officia-et-corrupti', 'Dk. Abdul No. 398, Pariaman 48111, Sumbar', '<p>Quam perspiciatis neque minus et. Aperiam inventore a voluptas aperiam non quidem. Unde libero quis ab et quos. Qui commodi quaerat est aut esse repellendus aut.</p><p>Enim voluptas velit natus quibusdam omnis rerum accusantium. Ut repudiandae saepe voluptas vel vel omnis. Voluptatem architecto non quas et.</p>', 'suartini.asia', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\efca15e3daf4095135aa6b95c61eb699.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(18, 1, 'Fa Laksmiwati Puspita', 'vel-voluptatem-quo-aut-modi-eos-qui', 'Ds. Kiaracondong No. 499, Samarinda 38914, Jatim', '<p>Saepe ullam minima nemo odio modi reiciendis. Id ipsam libero consequatur asperiores dolorem. Illo et nisi consectetur velit suscipit nihil dicta. Dicta nisi nam eum atque et iusto.</p><p>Quis ut et soluta voluptatum accusamus dolorem. Qui sit ducimus impedit. Debitis incidunt doloremque sit qui omnis itaque rerum animi.</p>', 'lazuardi.sch.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c4674a3fe1b7fc18e7cd268af7137eda.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(19, 1, 'CV Uyainah Napitupulu Tbk', 'tempore-quia-odio-quidem-omnis-porro-nobis', 'Jln. Bah Jaya No. 336, Solok 71929, Kepri', '<p>Iste aut omnis quo harum itaque accusamus sint. Veniam consequatur veritatis quasi et. Molestiae repudiandae aperiam commodi eum omnis. Excepturi quibusdam aut aliquid assumenda temporibus sapiente ducimus iure.</p><p>Nam est distinctio corporis dolores. Alias est sit natus soluta. Consequuntur nemo provident cumque placeat similique. Et molestiae tempora id deleniti doloribus qui vitae. Velit eum autem alias dolorum pariatur magnam quisquam.</p>', 'pertiwi.com', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\1b214e00b4d0253890ca687395a68349.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(20, 1, 'PJ Permata Puspita Tbk', 'voluptatem-quia-necessitatibus-dolorem-id-aut', 'Gg. Basmol Raya No. 471, Pematangsiantar 35843, Sultra', '<p>Totam officia magni dolor iste quam. Enim non ut fugit. Dicta ad non possimus ut sunt ullam dolor.</p><p>Culpa sit impedit inventore id laborum. Commodi atque sed molestias sit. Impedit aspernatur sapiente ad pariatur quae earum.</p><p>Sint illo quis optio nisi sit eveniet nulla repellendus. Ea neque nesciunt asperiores ea libero porro in. Et quas facilis minima itaque tenetur iure aut blanditiis.</p>', 'maheswara.or.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\9c8a84b7933aaa58c38a1a40a4be3e91.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(21, 2, 'PT Mandasari Latupono Tbk', 'rerum-sit-tenetur-aliquid-cumque-sequi', 'Gg. Sudiarto No. 766, Bengkulu 30861, Kalbar', '<p>Eveniet reiciendis dolorem animi non tempora. Qui porro quia qui perferendis laudantium. Repellendus mollitia numquam nulla consequatur. Quidem eum nemo est sequi. Asperiores ratione perspiciatis et et.</p><p>Esse perferendis aspernatur voluptates. Dolorem amet provident dolores corporis. Non saepe voluptates molestiae modi.</p><p>Autem expedita enim aut sed et ea. Animi aut in ea sint est molestiae quo quasi. Facilis vero aspernatur at sed magni porro blanditiis adipisci. Aspernatur ea fugiat corporis maxime in.</p>', 'hariyah.ac.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\d09d2700dfb78e9a13ae3324ce18b6cb.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(22, 2, 'Yayasan Putra', 'eius-ut-in-aut-voluptatibus', 'Jr. Surapati No. 710, Pontianak 28464, Bali', '<p>Hic ratione ipsam omnis. Dolorem veniam veniam dolor cum. Et perspiciatis beatae omnis. Nemo error totam blanditiis voluptate. Non voluptatem doloribus exercitationem quis aut in illo.</p><p>Qui omnis ipsum ducimus ad esse rem maxime. Veniam qui nostrum quia aspernatur necessitatibus. Veniam vero exercitationem perspiciatis veritatis. Sint voluptatem dolor et. Necessitatibus earum quidem aut sint repellendus.</p>', 'permata.info', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\3c7646e71e1513946572bbed75ff39d8.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(23, 2, 'PT Budiyanto', 'nam-dolorem-voluptas-dicta-sed-incidunt-inventore-error-praesentium', 'Gg. Baha No. 674, Lubuklinggau 70108, NTT', '<p>Doloremque rerum tenetur aliquid nesciunt voluptates enim. Quia recusandae consequatur rem ipsa ex.</p><p>Nulla voluptatibus doloribus mollitia iste quod ex. Sunt sint soluta in et dolorem perferendis. Excepturi harum nisi ad sed distinctio. Molestiae aliquid et et voluptates facere vitae rerum et.</p>', 'susanti.ac.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\9ef923ff95847790061e5ef05bdaf965.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(24, 1, 'UD Habibi Sitorus', 'sint-architecto-dolorem-ut-commodi-et-consequatur-debitis', 'Dk. Baranang Siang Indah No. 983, Jambi 14369, Banten', '<p>Accusantium amet expedita placeat unde. Optio porro distinctio aut id voluptas libero ratione. Quo est ipsa similique totam nisi.</p><p>Rerum quis nesciunt omnis nemo eveniet atque maxime deserunt. Aspernatur maxime suscipit velit voluptatem voluptatibus laborum odit sapiente.</p>', 'kuswoyo.sch.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\adaf258466ad9e33e908b6609b048d82.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(25, 2, 'Yayasan Palastri Tbk', 'a-facilis-aut-at', 'Jln. Bak Mandi No. 130, Yogyakarta 60642, DIY', '<p>Doloremque eligendi ut facilis assumenda. Et optio tenetur provident. Ut temporibus officiis alias aspernatur nisi consequatur. Est sunt aut accusamus officia consectetur accusamus enim.</p><p>Dignissimos aliquam voluptate excepturi. Ipsa rerum ducimus aut at. Impedit et quod voluptate sequi libero ipsam. Quae sed consequatur voluptatem et.</p>', 'pradipta.co.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\8b39ba0d4f8c5e8f0c1cbce7767c2c4e.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(26, 2, 'PJ Mayasari', 'sed-minus-minima-ullam-et', 'Jr. Radio No. 865, Tarakan 23823, Babel', '<p>Voluptate quia deleniti ducimus consequatur qui dolorem. Ut sit laborum ipsum corporis in cumque. Dolor et molestiae ipsum sed. Laudantium quis qui et nostrum voluptate autem.</p><p>Adipisci blanditiis quis hic est fuga aliquam occaecati et. Quos occaecati dignissimos iste. Qui est ut et quae sed aut.</p>', 'nasyidah.ac.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\7ba1faecbe86e19c48a96cbab9695fb6.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(27, 1, 'Fa Firmansyah Widodo Tbk', 'porro-voluptatem-animi-eveniet-natus-vel-et', 'Jln. Achmad No. 496, Salatiga 98273, Aceh', '<p>Nam omnis et aut autem in. Nostrum impedit amet sapiente nulla. Consectetur laudantium nostrum dolores atque repudiandae rem rerum. Accusamus quisquam sed distinctio voluptas adipisci aut.</p><p>Adipisci culpa quod ut quaerat. Atque earum eos voluptas error. Distinctio eos quia et sit amet.</p>', 'utami.org', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\012e3295affb2f5ef1c13b3f656dc4a4.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(28, 1, 'PJ Firgantoro (Persero) Tbk', 'ducimus-illum-necessitatibus-facere-sint', 'Dk. Aceh No. 217, Solok 36061, Sulsel', '<p>Beatae pariatur repellendus consequuntur qui doloremque et error ipsum. Ipsa architecto quod odit ut.</p><p>Qui esse et esse voluptas omnis sed et. Totam accusantium ut sapiente officia sint tempora. Nemo facere sed vel dolores qui earum. Ea iusto et iure veniam ab est.</p><p>Amet vero facere totam reprehenderit vitae architecto. Aut repellat voluptatibus ut est rem sint libero. Consectetur ut sint voluptatem quia.</p>', 'damanik.web.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\cd2f3a0cf1d625c28d25475e00fba8e6.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(29, 1, 'Perum Santoso Tbk', 'ipsam-atque-sint-velit-vel-et-eligendi-ut-laborum', 'Psr. B.Agam 1 No. 283, Kotamobagu 59631, Sumsel', '<p>Quod dolores enim voluptas ea vitae voluptatibus. Veniam quae magnam nemo voluptatem. Possimus quo corrupti dolorum earum. Ut provident assumenda non. Ut dolorem qui quis voluptatem.</p><p>Consequuntur consequatur laborum dolorem harum id qui repellat perferendis. Reprehenderit deleniti et exercitationem non asperiores ipsum. Distinctio ex aperiam quisquam quis quis odio.</p>', 'sinaga.info', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\e6ddd898edbfbc9b3e65a88908d790fe.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40'),
(30, 1, 'UD Mustofa (Persero) Tbk', 'alias-ducimus-et-ipsum-aut-dolores-ut-deleniti-quae', 'Ki. Barat No. 16, Banjarmasin 20454, Kalteng', '<p>Optio quo dolor velit vel. Eum placeat perspiciatis omnis qui dolor harum deleniti. Accusamus aliquam aut ducimus voluptatibus quidem totam. Voluptatem molestiae numquam iure doloremque. Quisquam perferendis impedit hic unde eius dolorem excepturi.</p><p>Temporibus dolor expedita quis. Nostrum in porro voluptatem et sit voluptatem porro.</p>', 'haryanto.com', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\29b10431984a16be09e4be6f41c39f0c.png', NULL, '2024-03-06 06:39:40', '2024-03-06 06:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livings`
--

CREATE TABLE `livings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portal` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `logo_sl` varchar(255) DEFAULT NULL,
  `published_it` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livings`
--

INSERT INTO `livings` (`id`, `portal`, `slug`, `alamat`, `deskripsi`, `link`, `status`, `logo_sl`, `published_it`, `created_at`, `updated_at`) VALUES
(1, 'PJ Mahendra Farida', 'qui-doloremque-maxime-in-at-blanditiis', 'Psr. M.T. Haryono No. 541, Tual 98722, Sumut', 'Alice soon began talking to him,\' the Mock Turtle went on. \'Or would you tell me,\' said Alice, \'a great girl like you,\' (she might well say that \"I see what was the Duchess\'s voice died away, even.', 'budiyanto.or.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\886815d17c254421e4887f9dea51e18a.png', NULL, '2024-03-06 06:41:31', '2024-03-06 06:41:31'),
(2, 'Yayasan Maryadi', 'eveniet-ut-sint-doloremque-enim-cupiditate-commodi', 'Ki. Jagakarsa No. 701, Palopo 99087, Kaltim', 'King said to herself \'This is Bill,\' she gave her answer. \'They\'re done with blacking, I believe.\' \'Boots and shoes under the sea--\' (\'I haven\'t,\' said Alice)--\'and perhaps you haven\'t found it very.', 'safitri.biz', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\88bafbe79153b16ba167f2c0c3c62f5c.png', NULL, '2024-03-06 06:41:31', '2024-03-06 06:41:31'),
(3, 'Fa Pratiwi Maulana', 'occaecati-voluptas-impedit-hic-aut-est-sunt-alias-et', 'Gg. Abdul No. 864, Pontianak 41797, Pabar', 'Alice thought she might as well wait, as she was quite surprised to find herself talking familiarly with them, as if he would deny it too: but the Dodo in an offended tone. And she kept tossing the.', 'siregar.desa.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\b0a0999b171d6087bd97b0454abdb5ab.png', NULL, '2024-03-06 06:41:31', '2024-03-06 06:41:31'),
(4, 'Perum Laksmiwati', 'excepturi-sunt-eius-reiciendis-est-eum-quo', 'Gg. Merdeka No. 312, Yogyakarta 83790, Malut', 'Mock Turtle. \'She can\'t explain MYSELF, I\'m afraid, but you might do something better with the bones and the March Hare, \'that \"I breathe when I sleep\" is the same as the Rabbit, and had to sing you.', 'uwais.name', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\db0be2fac194e4337bb03ad614b11e3c.png', NULL, '2024-03-06 06:41:31', '2024-03-06 06:41:31'),
(5, 'PJ Pradipta Tbk', 'in-eligendi-consequuntur-corrupti-molestiae-officia-velit-dolor', 'Psr. Bhayangkara No. 731, Solok 36453, Kalbar', 'Queen left off, quite out of THIS!\' (Sounds of more energetic remedies--\' \'Speak English!\' said the Mock Turtle sang this, very slowly and sadly:-- \'\"Will you walk a little pattering of feet in the.', 'sitorus.co.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\8b974ef2bcdd3bcb853f50bda3ffca80.png', NULL, '2024-03-06 06:41:31', '2024-03-06 06:41:31'),
(6, 'Fa Pratama Wibisono Tbk', 'nobis-atque-doloribus-tempora-dolorum-sit-molestiae', 'Gg. Juanda No. 701, Tidore Kepulauan 81415, Malut', 'The Queen turned crimson with fury, and, after folding his arms and frowning at the March Hare. \'Sixteenth,\' added the Gryphon, half to itself, \'Oh dear! Oh dear! I\'d nearly forgotten that I\'ve got.', 'prabowo.sch.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\68e42a9eda441655d3ebb8794006243b.png', NULL, '2024-03-06 06:41:31', '2024-03-06 06:41:31'),
(7, 'Fa Wastuti', 'corporis-laudantium-corporis-quam-dolorem-inventore-exercitationem-optio', 'Kpg. S. Parman No. 767, Palopo 39443, Malut', 'I can find them.\' As she said this last word two or three times over to the door, staring stupidly up into the sky. Alice went on, \'and most of \'em do.\' \'I don\'t see any wine,\' she remarked. \'There.', 'mansur.sch.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\e5d0076ccfff321522cf731d282a346f.png', NULL, '2024-03-06 06:41:31', '2024-03-06 06:41:31'),
(8, 'PJ Wahyuni Nababan', 'quo-nulla-earum-consequatur-dolorum-dignissimos-nemo-laborum', 'Gg. Tambak No. 478, Administrasi Jakarta Barat 80865, Sumsel', 'I\'ll get into her eyes--and still as she went slowly after it: \'I never thought about it,\' added the Dormouse, after thinking a minute or two, which gave the Pigeon went on, half to Alice. \'What.', 'padmasari.asia', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\b3f3186bfc67a9813129f71feba0604f.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(9, 'Perum Padmasari Wahyuni', 'ut-voluptatum-est-ut-error-distinctio-officiis-illo-voluptate', 'Gg. Warga No. 914, Banda Aceh 67076, Malut', 'My notion was that it signifies much,\' she said these words her foot slipped, and in his throat,\' said the King; \'and don\'t be particular--Here, Bill! catch hold of this sort in her French.', 'nashiruddin.co', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\f293e24145cc5e24173c418ae14bc4c7.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(10, 'PD Manullang', 'autem-ea-voluptatum-temporibus-saepe', 'Jln. Cut Nyak Dien No. 281, Dumai 40582, Kaltim', 'I can say.\' This was such a thing as \"I sleep when I was going to dive in among the trees, a little shriek and a Long Tale They were indeed a queer-looking party that assembled on the slate.', 'maryadi.net', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\9164c40995c41e8883d44c1c85a6e015.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(11, 'PT Rahmawati Maryati', 'quod-deserunt-expedita-facere-similique-ut-exercitationem', 'Gg. Sumpah Pemuda No. 960, Tangerang 14364, Aceh', 'However, at last turned sulky, and would only say, \'I am older than you, and must know better\'; and this he handed over to herself, \'Which way? Which way?\', holding her hand in hand, in couples.', 'nababan.asia', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\77b1d4d80ff5a4b1ab4f4cf191c8d965.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(12, 'Fa Novitasari', 'veniam-unde-suscipit-at', 'Dk. M.T. Haryono No. 538, Pasuruan 53629, Gorontalo', 'Caterpillar, just as well as she could, for the fan and gloves--that is, if I know all the way out of the garden, and marked, with one finger for the garden!\' and she dropped it hastily, just in.', 'lestari.tv', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c31374678e741316f7a790164ae18c12.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(13, 'CV Samosir Zulkarnain', 'quod-omnis-explicabo-eum-ab-eligendi', 'Psr. B.Agam Dlm No. 176, Kotamobagu 67899, Kalbar', 'And how odd the directions will look! ALICE\'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE\'S LOVE). Oh dear, what nonsense I\'m talking!\' Just then she noticed that they were gardeners.', 'putra.go.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\523aa5349ca489b8d381c84fa5291a2a.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(14, 'Fa Palastri', 'numquam-consequuntur-est-id-consequuntur-sed', 'Jln. Agus Salim No. 915, Palu 63829, Lampung', 'I could show you our cat Dinah: I think you\'d better ask HER about it.\' \'She\'s in prison,\' the Queen had never left off staring at the place of the reeds--the rattling teacups would change to dull.', 'laksita.sch.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c032af8d1702dca7eb791d141f97fb10.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(15, 'Perum Habibi Budiman', 'consequuntur-debitis-cum-facere-ratione-delectus', 'Jln. Warga No. 194, Bogor 68595, Banten', 'And argued each case with my wife; And the muscular strength, which it gave to my jaw, Has lasted the rest of the door of the hall; but, alas! the little passage: and THEN--she found herself falling.', 'wibowo.info', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\f46f0f2d212216fb268ee77603333107.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(16, 'PD Tampubolon Iswahyudi', 'assumenda-molestiae-sit-saepe-ad', 'Jr. Reksoninten No. 747, Jayapura 94734, Kaltara', 'She said this she looked down at her with large eyes full of the soldiers had to ask the question?\' said the Hatter. \'It isn\'t a bird,\' Alice remarked. \'Oh, you can\'t swim, can you?\' he added.', 'nainggolan.or.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\9f6af2bf5de12fd36c0b8d6cfcffcb1d.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(17, 'PJ Permata', 'est-voluptatem-magni-dolorum-quia', 'Jln. Padma No. 658, Tegal 56352, DKI', 'Alice, as she spoke, but no result seemed to be full of tears, until there was a large canvas bag, which tied up at the stick, running a very little use without my shoulders. Oh, how I wish you.', 'nasyiah.ac.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\f7bd877b085bfa4f29c62cda77989302.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(18, 'UD Halim Mulyani Tbk', 'consequatur-deserunt-qui-qui-fugiat-debitis', 'Dk. R.E. Martadinata No. 8, Tarakan 65125, Sulsel', 'I beg your pardon!\' said the Gryphon: and it set to partners--\' \'--change lobsters, and retire in same order,\' continued the Gryphon. \'Well, I shan\'t grow any more--As it is, I can\'t show it you.', 'januar.in', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\990ec89c875a83d407928ee6a8f33093.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(19, 'CV Zulaika Tbk', 'ratione-quod-deserunt-ab-dicta-inventore', 'Jr. Rumah Sakit No. 461, Kupang 33365, Babel', 'I goes like a star-fish,\' thought Alice. \'Now we shall get on better.\' \'I\'d rather finish my tea,\' said the March Hare. The Hatter opened his eyes. \'I wasn\'t asleep,\' he said in a great many more.', 'puspita.go.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\85fbe563bb81bbf306c96bc43f70d52e.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32'),
(20, 'Yayasan Ardianto', 'quis-amet-voluptas-et-animi-aut-molestiae', 'Ds. Bara No. 797, Samarinda 64995, Sulbar', 'Dormouse say?\' one of them.\' In another moment that it is!\' As she said to Alice, they all spoke at once, in a furious passion, and went down on one side, to look through into the garden. Then she.', 'mardhiyah.tv', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\9d46eaadadac455db17c4117a69c2a06.png', NULL, '2024-03-06 06:41:32', '2024-03-06 06:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_12_012458_create_brandings_table', 1),
(6, '2024_02_12_020234_create_jobs_table', 1),
(7, '2024_02_15_022847_create_governances_table', 1),
(8, '2024_02_16_023058_create_categories_table', 1),
(9, '2024_03_05_072959_create_economies_table', 1),
(10, '2024_03_06_030130_create_societies_table', 1),
(11, '2024_03_06_035235_create_livings_table', 1),
(12, '2024_03_06_035251_create_environments_table', 1),
(13, '2024_03_06_131219_create_beritas_table', 1),
(14, '2024_03_06_131232_create_tags_table', 1),
(15, '2024_03_07_140914_create_pesans_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `societies`
--

CREATE TABLE `societies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portal` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `logo_sc` varchar(255) DEFAULT NULL,
  `published_it` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `societies`
--

INSERT INTO `societies` (`id`, `portal`, `slug`, `alamat`, `deskripsi`, `link`, `status`, `logo_sc`, `published_it`, `created_at`, `updated_at`) VALUES
(1, 'Perum Prakasa Prastuti', 'magnam-labore-aut-cumque-odit-sed-dolore-id-deleniti', 'Kpg. Abang No. 461, Tebing Tinggi 93931, Kepri', 'YOU with us!\"\' \'They were learning to draw,\' the Dormouse began in a hoarse, feeble voice: \'I heard every word you fellows were saying.\' \'Tell us a story!\' said the Gryphon. \'We can do without.', 'agustina.tv', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\ec1d5bfb7dc4f05aee992f69c207bb65.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(2, 'Yayasan Pradana Winarsih', 'et-inventore-quo-autem-quae-dignissimos-quisquam-numquam', 'Psr. Elang No. 372, Ternate 88627, DKI', 'Alice considered a little, \'From the Queen. \'Their heads are gone, if it likes.\' \'I\'d rather not,\' the Cat again, sitting on the glass table as before, \'It\'s all about as curious as it left no mark.', 'prasasta.mil.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\59e9411adbefc114626d847ec9d1fa80.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(3, 'PT Wahyudin Tbk', 'ut-iusto-blanditiis-doloremque-culpa-at-quasi-qui', 'Jr. Kartini No. 94, Kediri 85596, Sulut', 'The rabbit-hole went straight on like a telescope.\' And so it was looking up into the air, mixed up with the lobsters, out to sea!\" But the insolence of his teacup and bread-and-butter, and then.', 'siregar.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\3dc8c9a0763c98de4fe1f7cda9e2cb17.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(4, 'UD Manullang Mulyani', 'aut-fugit-sunt-possimus-voluptas-minima-non-quo-est', 'Jr. Uluwatu No. 760, Jambi 25734, Sumbar', 'EVEN finish, if he had a vague sort of chance of her age knew the right height to be.\' \'It is a very little! Besides, SHE\'S she, and I\'m sure I have to fly; and the Gryphon went on. \'Or would you.', 'nashiruddin.co.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\1bff2a0f4eff45fa07405add28b41386.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(5, 'Perum Sirait Maryadi (Persero) Tbk', 'perspiciatis-consequatur-eum-minus-aut-quos', 'Ki. Yosodipuro No. 942, Manado 13721, Malut', 'Dormouse followed him: the March Hare and the Queen merely remarking that a moment\'s pause. The only things in the distance. \'And yet what a dear quiet thing,\' Alice went on all the way YOU manage?\'.', 'wahyudin.org', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\76f432c6328e8d88b202bdc82eaf193d.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(6, 'CV Mansur Narpati', 'consequatur-perspiciatis-optio-alias', 'Jr. S. Parman No. 807, Pematangsiantar 38456, Sulut', 'Hatter: \'let\'s all move one place on.\' He moved on as he came, \'Oh! the Duchess, digging her sharp little chin. \'I\'ve a right to think,\' said Alice to herself, \'if one only knew the name of nearly.', 'sihombing.web.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\d47fc41923d01251c47567da9ebd769a.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(7, 'CV Yuliarti', 'quia-sit-sed-nesciunt', 'Ki. HOS. Cjokroaminoto (Pasirkaliki) No. 315, Sungai Penuh 72750, Kalteng', 'AND WASHING--extra.\"\' \'You couldn\'t have done just as well say,\' added the Queen. First came ten soldiers carrying clubs; these were all turning into little cakes as they came nearer, Alice could.', 'usada.desa.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\e9d8bc6401d33458cef38139d24ac0d0.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(8, 'CV Wahyuni Purnawati', 'velit-qui-quisquam-ea-consectetur-occaecati', 'Jln. Kiaracondong No. 196, Pekanbaru 50554, Kalsel', 'Alice, rather alarmed at the other, and growing sometimes taller and sometimes shorter, until she made out what she was ever to get rather sleepy, and went on again:-- \'You may go,\' said the Lory.', 'pudjiastuti.name', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\29c61cef65d6426acf92ca7df485f43a.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(9, 'PJ Riyanti', 'vel-odit-delectus-dolore-aut-ut-maiores', 'Psr. Suryo Pranoto No. 198, Bandung 85516, DKI', 'Dormouse go on for some minutes. Alice thought to herself what such an extraordinary ways of living would be a person of authority among them, called out, \'First witness!\' The first question of.', 'setiawan.org', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c8696bb1fd3adc03f24bcc8ef32f2814.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(10, 'Fa Thamrin Mardhiyah', 'sapiente-voluptatem-sequi-id-quis-ex-nihil', 'Ds. Nangka No. 594, Bengkulu 55327, Sumsel', 'Hatter, \'I cut some more tea,\' the March Hare. Visit either you like: they\'re both mad.\' \'But I don\'t like them raw.\' \'Well, be off, then!\' said the Mock Turtle drew a long time together.\' \'Which is.', 'rahmawati.net', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\c868049a8e07414206e95ce913b764d5.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(11, 'PD Hartati Tbk', 'similique-eaque-necessitatibus-quo-neque', 'Ds. Cikutra Timur No. 536, Kediri 87330, Sumsel', 'Footman went on so long since she had to double themselves up and bawled out, \"He\'s murdering the time! Off with his head!\' or \'Off with his nose, you know?\' \'It\'s the first minute or two, looking.', 'rahayu.or.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\66ce2600eff0f2d71cb0fe6c5751b435.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(12, 'PJ Maryadi Nasyidah', 'voluptas-quis-dolores-minima-dolores-ut', 'Jr. Balikpapan No. 12, Dumai 17014, Sulteng', 'Queen. An invitation from the sky! Ugh, Serpent!\' \'But I\'m NOT a serpent!\' said Alice a good deal to ME,\' said the Cat, \'or you wouldn\'t have come here.\' Alice didn\'t think that there was not a.', 'pradana.info', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\b8bc576917308f524a62a9f36e89b1b5.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(13, 'Fa Simanjuntak Prakasa', 'ipsum-quisquam-voluptas-nihil-omnis-est-fugit', 'Kpg. Dago No. 104, Balikpapan 19120, Banten', 'Alice sadly. \'Hand it over afterwards, it occurred to her ear. \'You\'re thinking about something, my dear, and that he had come back again, and Alice heard the Rabbit actually TOOK A WATCH OUT OF ITS.', 'mansur.tv', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\f20eaa5feb9e93f8a38f875b3ca91c7d.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(14, 'PT Rahimah Tbk', 'quod-sit-magnam-maiores-molestias-qui-neque-harum', 'Ds. Cokroaminoto No. 116, Palembang 16405, Sulut', 'Alice hastily replied; \'at least--at least I know I have none, Why, I haven\'t been invited yet.\' \'You\'ll see me there,\' said the Mouse. \'--I proceed. \"Edwin and Morcar, the earls of Mercia and.', 'lazuardi.net', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\aa45b228b5553bf0b1437319af630143.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58'),
(15, 'UD Kusumo', 'tempore-voluptate-adipisci-sapiente-dolore-nihil-excepturi', 'Jln. Padma No. 59, Ternate 64259, Sultra', 'I could show you our cat Dinah: I think I can kick a little!\' She drew her foot slipped, and in another minute the whole court was in the middle, being held up by wild beasts and other unpleasant.', 'suwarno.info', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\280a6ffd3c56371f94a84aeaf584fea9.png', NULL, '2024-03-06 06:40:58', '2024-03-06 06:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Personal', 'personal', '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(2, 'Web Programming', 'web-programming', '2024-03-06 06:42:05', '2024-03-06 06:42:05'),
(3, 'Web Design', 'web-design', '2024-03-06 06:42:05', '2024-03-06 06:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jobdesk` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `jobdesk`, `profile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luis Gaduh Sitompul S.Pt', 'pangestu.kuswandari', 'hassanah.dian@example.com', 'Admin', NULL, '2024-03-06 06:38:49', '$2y$12$osmzzD7RNcuI0wvB.Tea7u0JKQwdpxQcb1U1Vg8zyXWR9jhOmEY42', 'gAHzalCen7', '2024-03-06 06:38:49', '2024-03-06 06:38:49'),
(2, 'Kairav Cakrabuana Simbolon S.I.Kom', 'prastuti.tami', 'kasiran73@example.net', 'SuperAdmin', NULL, '2024-03-06 06:38:49', '$2y$12$osmzzD7RNcuI0wvB.Tea7u0JKQwdpxQcb1U1Vg8zyXWR9jhOmEY42', 'oQjTRrXl75', '2024-03-06 06:38:49', '2024-03-06 06:38:49'),
(3, 'Jail Haryanto', 'eja.laksmiwati', 'hassanah.rachel@example.net', 'Admin', NULL, '2024-03-06 06:38:49', '$2y$12$osmzzD7RNcuI0wvB.Tea7u0JKQwdpxQcb1U1Vg8zyXWR9jhOmEY42', 'MvD6r17yle', '2024-03-06 06:38:49', '2024-03-06 06:38:49'),
(4, 'Cemani Hidayanto', 'eoktaviani', 'sidiq79@example.com', 'SuperAdmin', NULL, '2024-03-06 06:38:49', '$2y$12$osmzzD7RNcuI0wvB.Tea7u0JKQwdpxQcb1U1Vg8zyXWR9jhOmEY42', 'g1TA1zEKsm', '2024-03-06 06:38:49', '2024-03-06 06:38:49'),
(5, 'Dadi Pratama', 'daruna93', 'wibowo.endra@example.org', 'SuperAdmin', NULL, '2024-03-06 06:38:49', '$2y$12$osmzzD7RNcuI0wvB.Tea7u0JKQwdpxQcb1U1Vg8zyXWR9jhOmEY42', 'axwZBWidjc', '2024-03-06 06:38:49', '2024-03-06 06:38:49'),
(6, 'Hadi Ikhwanul', 'hadi', 'hadikhwanul@gmail.com', 'SuperAdmin', 'HadiProfile.jpg', NULL, '$2y$12$mSFe919VPVPM7tTGgOVZNex083UlHT6Vz/r7mlCh7Ic9CBQlYjLBm', NULL, '2024-03-06 06:42:05', '2024-03-06 06:42:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`);

--
-- Indexes for table `brandings`
--
ALTER TABLE `brandings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brandings_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_nama_unique` (`nama`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `economies`
--
ALTER TABLE `economies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `economies_slug_unique` (`slug`);

--
-- Indexes for table `environments`
--
ALTER TABLE `environments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `environments_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `governances`
--
ALTER TABLE `governances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `governances_slug_unique` (`slug`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `livings`
--
ALTER TABLE `livings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `livings_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pesans_slug_unique` (`slug`),
  ADD UNIQUE KEY `pesans_ticket_unique` (`ticket`);

--
-- Indexes for table `societies`
--
ALTER TABLE `societies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `societies_slug_unique` (`slug`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brandings`
--
ALTER TABLE `brandings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `economies`
--
ALTER TABLE `economies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `environments`
--
ALTER TABLE `environments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `governances`
--
ALTER TABLE `governances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livings`
--
ALTER TABLE `livings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `societies`
--
ALTER TABLE `societies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
