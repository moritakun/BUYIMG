cd C:\xampp\mysql\bin
mysql -u root -h localhost

cd /Applications/MAMP/Library/bin
./mysql -u root -h localhost -proot

cd /Applications/XAMPP/xamppfiles/bin
./mysql -u root -h localhost

set character_set_client=sjis;
set character_set_connection=utf8;
set character_set_results=sjis;
set character_set_server=utf8;


USE rain_site;

select * from product_master;

CREATE TABLE `product_master` (
  `product_id` int(11) NOT NULL COMMENT '�f��ID',
  `product_name` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '�f�ޖ�',
  `product_introduction` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '�f�ޏЉ�',
  `product_path` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '�f�ރf�[�^',
  `price` int(30) NOT NULL COMMENT '���i',
  `size` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '�T�C�Y',
  `type` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '�g���q',
  `upload_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '�A�b�v���[�h��',
  `big_category` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '��J�e�S����',
  `author_name` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '��Җ�'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='�f�ވꗗ';

--
-- ?���\���I���� `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_name`, `product_introduction`, `product_path`, `price`, `size`, `type`, `upload_data`, `big_category`, `author_name`) VALUES
(1, '�I�b�T��', '�I�b�T��', './picture/people1.jpg', 300, '479*470', 'JPG', '2019-02-07 14:43:22', '�l', '����'),
(5, '��', '��', './picture/people2.jpg', 400, '470*500', 'JPG', '2019-02-07 14:45:04', '�l', '����'),
(7, '�Ԃ����', '�Ԃ����', './picture/people3.jpg', 300, '479*470', 'JPG', '2019-02-07 14:47:33', '�l', '����'),
(8, '���̎q', '���̎q', './picture/people4.jpg', 300, '479*470', 'JPG', '2019-02-07 14:48:22', '�l', '����'),
(9, '�p�\�R��', '�p�\�R��', './picture/mono1.jpg', 300, '479*470', 'JPG', '2019-02-07 14:49:26', '��', '����'),
(10, '�؂�', '�؂�', './picture/mono2.jpg', 400, '470*500', 'JPG', '2019-02-07 14:50:06', '��', '����'),
(11, '�o�b�N', '�o�b�N', './picture/mono3.jpg', 400, '479*470', 'JPG', '2019-02-07 14:50:38', '��', '����'),
(12, '�e�[�u��', '�e�[�u��', './picture/mono4.jpg', 400, '479*470', 'JPG', '2019-02-07 14:51:07', '��', '����'),
(13, '�p���_', '�p���_', './picture/animal1.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '����', '��'),
(14, '�]�E', '�]�E', './picture/animal2.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '����', '��'),
(15, '�Ƃ�', '�Ƃ�', './picture/animal3.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '����', '��'),
(16, '�T��', '�T��', './picture/animal4.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '����', '��'),
(17, '������', '������', './picture/car1.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '��', '����'),
(18, '������', '������', './picture/car2.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '��', '����'),
(19, '�C���X�g��', '�C���X�g��', './picture/car3.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '��', '����'),
(20, '���������', '���������', './picture/car4.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '��', '����');



