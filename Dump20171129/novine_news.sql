-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: novine
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.17.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `dateTime` datetime NOT NULL,
  `category` int(11) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` blob,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `user_idx` (`user`),
  KEY `category_idx` (`category`),
  CONSTRAINT `category` FOREIGN KEY (`category`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Ovo je moj prvi naslov','Ovo je moj prvi sadrzaj koji ce se prikazivati','2017-11-28 19:12:00',2,'',NULL,2),(4,'Hronicna ves LOL','Ovo je uzas ne znadem sto ducinim,msm znam al ima da se namucim','2017-11-28 21:07:47',3,'BUdja','Array',2),(5,'Hronicna ves LOL','Ovo je uzas ne znadem sto ducinim,msm znam al ima da se namucim','2017-11-28 21:10:07',3,'','Array',2),(6,'Ajmo sad d vidimo','A sta kazes na ovo?','2017-11-28 21:11:37',2,'','Array',2),(7,'Ajmo sad d vidimo','A sta kazes na ovo?','2017-11-28 21:11:56',2,'','Array',2),(8,'Ce sad da proverim','khm','2017-11-28 21:15:19',2,'','�\��\�\\0JFIF\\0\\0\\0\\0\\0\\0��\\0;CREATOR: gd-jpeg v1.0 (using IJG JPEG v62), quality = 75\n�\�\\0C\\0		\n\r\Z\Z $.\\\' \\\",#(7),01444\\\'9=82<.342�\�\\0C			\r\r2!!22222222222222222222222222222222222222222222222222��\\0��\\\"\\0�\�\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0	\n�\�\\0�\\0\\0\\0}\\0!1AQa\\\"q2���#B��R\��$3br�	\n\Z%&\\\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz�����������������������������������\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\������������\�\\0\\0\\0\\0\\0\\0\\0\\0	\n�\�\\0�\\0\\0w\\0!1AQaq\\\"2�B����	#3R�br\�\n$4\�%�\Z&\\\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz������������������������������������\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�\�����������\�\\0\\0\\0?\\0˴ �A�Tq.\�\�8a�}+\�G�#J��\�{G\��q]�p+H;3��\�޶l\��Bנ���^�7�\�\�Z�S\�N*�j\����lr\�\�Z\r��3\n(����\\0RQE0\n(���JZ\\0Z))i\\0��\�Z:��KHc�����(�\�IK@ť�\�\�1h��@-%P\�IE\\0QE\\0QE�J(sE%Z(��\n(��\nJ(�EPIE)3E�3Fi(�B\�4\�(٣4\�3E�;4n�f�\�`��\�\�њ,$\�F\�4��a\\\\{7ZV\�cU�<S�\�R��\�E\��MjNz\�M\�\�5�\�`e��j\�uU~�\\\\�q\\\\\�I(⟞)��\\\'B8U9�K\�\�g�ȱV�X\\\"�T{�\\\'�8��j\�\n��q%m\�th\�gIh~QW3\�fY�\�*�lץJZuX\�O&�/J��C�v\�c��\�E-%Y�QE\\0�R\�PES\\0��(\\0��(h������R\�QIK@Ţ���E%\\0�����-��\\0�RR\�QE\\0QE\\0QE\\0QE\\0��Q@E%-\\0QE\\0QE\\0��PQKIL����%-%0\nJ(�AEPIKI@%-%\\0RR\�\\0��(�U��U�\�@\������kVzʺ�����35~�]�����\�U\�t�b�\��2)��\�C1�ZDd\�^�s��_�W�\��\�\\\".kRոW\�\�Y�H\�Z1��o&\�V�~k\\\"\�d�ڶ�h;�u����L*$�Ezq\��RR\�U��Q@���(\\0��)�QE\\0QE\\0R\�R\�\�(���)i)i\\0���R�QE\\0--%�--%\\0�QE\n(��-%\\0QE\\0��Q@EPEP\�E-\\0%1\�?�\\\"�\�\�v��$�\�����\�Ev\�I�\�$���z��dvP�ʪ\�z#�I��\\\"�Ƥ�f)��\�;V���\��qSJU0N?��(\�R\�uX4�A3\�DX\�\�\Z�ԙ��UQ�kY׌71���Q]h���ʶ��h-.\�mn�}�\�iG9a*G̳E1%G\�y�4�\�4�G3������d�EPIKI@%-%\\0QE\\0���\\0Ǫ\�է����	\�*\�\�Ԟ�\�鬦mL\�O�V⪉֭\�\\\\\�I8����x��\��\�5\�\�|Ú\�\�!�\Z�\��\�~\�*\�G��\�t�\��\�y����{v\�V@Z�\�ɌWMc�����EV��X�(J\��GQ\�SsK�\�\�\rQ@���S���(\\0��)�QKI@-%-\\0-���KH)hh��C�(���))h���(�0��(\\0��(\\0���\\0JZ(��(���(h���8MJsq}36xb1U\\\"b\�u�O\�YN\��\r\�\�\��{�\rdisDږ\�[ht!�9�2p~\�\��\Z��\��\�:\�\��KE�X��UN\�P`��l\�&Ep{\�Oj&\�\�\�\�EGiP\�\���0$7��\�W,4ya\�dT�\�3�o������N\�D\��/<�#�������jFoS�ֽ�凥s�$^]�K&C\�\�\�>�\�X8,\\0\�\\\\����\�ހmA�{0��Fp�_\�-\�\� ���\�s�ܽ�ȧx��\�\�֑$�%T\�������ʚ��D\�\�\�*\nZ�Wa\�\nz\\\\s�N=뮝t����[\n\�5D\�R\�WA\����\\0RR\�PEPKIK@z�-Yz�-0(OYWt֬�\�*\�\�\�f�\�	֭GU���`tSXњF<S\�:T\�e\�ec6��Ģ�M-���yZ�\�\�M�\�V�)�Y�C(+b��rUdRGޝ+R�ɦm\�h��M\�h[�J���m\�\��\�We6rU�=.i�\�\�Bg3B斒�w\\\'�Z)(\�;�\�\�Fh\�;���J(��-QE\���3I�3LVE74��S����ZZnis@E%-���@--%(�1h��\\0(��\\0(��\\0Z(��\n(��\n(������)jZ�\�Ð��\�V\�[�[\�a\�8�\Z�ǟ�L}\�\��+#[�#<�Q8\�\\\\jNS�OgB�4������ckt�@\�d\������z;�Y\�\�\�D\�!Đ\�\�Q�\�(���\�U�L$Rm-<�\�\�jܗw�T�\\0hwe9�\�\�=�䴞�gO��_5\\\'f�̐\�\�w�t\�\�m`���\n�@\�\\\'��f��P��Ηj�^�$\�\�ǹ��C�|u�Q\�\�=\�I4�\�\\\"�%���W\�>Y3\�:�9��\�\�t��qi�A���\�^V@;�\��\�I\�{\�w6��\�J���\�\�\�\�\�\�$q��$nf5�a}o�,c�2\��\\\'u�Q����V���Y��\�1���~�5�\�-VC8\�\�\�\�\�9*7��}�\�F�\�\�Q);\�\�=\�PE�\\\\�Y�!\�F\�~OS\\\\��y}s��6�Vd�I=[�Et6f[\�(e�K\�P\�βNMݢRJ6o}M)5h�\��\\0�q�\�Զ��1�S�=�(��V�I�\\0�c�h\�Q��s�\��\�Z֗��<���\�f7Mr&��LprZ��dg$V%Ơȫ}ܼ(죹5�cEl�F,ǖ5i\�\�\�P\�W,[\�G\�\��\�l\�H�*\�n�\�R땞^.�+\�]E����N!))i(\\0��(\\0����=V���V��(M޲��\�Y�\�U\�CYLޙEj\�Uu�	X#��SX�Fi�x�#\�l2g\�i�\n䴫rnEvZzm�\�^EM\�n;U��ح��\�e\�/ȵ��]�G]\�\�\�J\�\�8\n$\�V\�6@��\�F�Y�\\0{�ֵ(�`\�\�[\�n)kt\�\Z4f����ah\�%\�+�3IE;����њ.M��4�\�f�\�I�J)ܖ�f�\Zfh\�;�bPisQ\�4��J\r34��\�?4��f�\Z\\0u8\ZfisHc\�-0\Z\\\\\�\�\����4P\�f�(�4��P\�\�Q@�������\��$h]\�*��\���F�qopڍ�����Tr��\�J\�?����\\0�\�nAIWqRpC\�\�5\�\�Y\�Km7��\�\��=g\�0\�\�=Ɛ\\\"\�1�c˓\�\�\Z\�O^z{��\�gYi\��B9t\�RV�VyVܩT\������\��I>�)�]\�0\�U=HM�\�D�\�\r�\�\�f�d�$\��=��soCݧ\�=\�mn\�\�}����CIb\�n�h5q�p\�\�ֹKkv\�8�ȭ�\\\\ja)E\�*\�\�5i\\\"��\�q,�L�\�@+�w�U�Kĺ��-\�\�w�fo\\\"8\�_:�\�g=�\�__j�{q\��\�\��L�a�L�\�\�\��\�\��U�o��\��\�\�M)^ �\�3e\�Y�\�쬯,�}&\�\�I\�S\�_�[1\\\\��~�r�2e�a@��N?A�]G�\r�\�\�>Yې��sޝ+\�\Zu3�\�:��\�t\\\'�\�\�������О\�ڼ����\\0J�0\�C$s1\�Ѿ��z�Fs\�\�Ym`��˞$�C\��D�ةV\�ѫ�¶2�i�%���c����\�))��aPG[�c��y\�2\�D���N\�j���\\\"��\�\�ˊ6�4\�e�\�\����Ui������fMR���2�\�\�͊*Y��\�\�*��HIJ7G�RqbRR\�T@�QE\\0�����ZZ��ZZ����Ά��\�Y7�\rc3ze%�ץB�2��Q�MF\�q5�)��:\�d\�qҺ+E\��TXV)����1^+wg��:�UEj�\�V>�\�Q[Q�]��G�WFH�Q\\\\�jbB��;[h\�[�[��rݳ[�\�J\�\�n8���w$���3Z-%�\�+	KE\�\n)h�\�a1E-\�.Q��\�J..Q))i)ܗ�����<�KE.(\�(\nZm.h��;4��f�4\�+\�.i��\�&isQ\�\Zw@isL�J\�\�\�\�sKJ\�XZZJ(�\�-%f��\�\�M\��!\�f��\\\\\�!ٮg\�\�\�4*p���5\�\�o��\�\�G?$�8��U�!�\r�S��\�\�um���\�\�E,O\��ۃN�\��;iᶆ\�YwG\�ɒy�00y��V��^�q�)R����`�u�	��\�>\�Q\�p\\0\�qFj*\����g�jz摧�\�G�\���f<\�\�wV\�y���\�h��\��\\\"��8\�\\\\z�ޫ\�~\\\"\�m5�&\�\�a8�\�خ�?\��ş\�|Cd<��\\0��>\���\�U9B�\�FrƝl4�\�z����E8 �k�Ҵ��V1�̸�s�s\�\�Y\�\�v\�:�Gev.�\���@=��t�\\01\�(<s�+8C޳6�[�\\\\\�6t�\�m�I�\�o$\�z�zU�E�\�K�����4p\�#\�&�YǴ��\\0��\�O���\��ea�u$��\�Jr���\�\�6�ڟ�SZ����H\�Gai1l��|\�\�^�\�J��Q\�,H�~�RH8<�V?\ripJ�\�G2X���\��F��\�B�!;8Ϲ\�oprK\�!\�\�\rn	m\�\��An@UPr�}MO�\�#�,\�p\�\�*��\�0O\�Q%3��r�\�}F#��j�\�@\�BaZa�����\n\�Qncp{�\�V��CY\�%��[mo�J\�S�\�\�rb��Ǚn�����\�y!IKE\\0QE\\01괵e괔\r\\\'\�k&�kMҲ/+�ʋR��\nԠ�X�f\�Ni\�j\\\'5B9뀒�jKY�m�MVr.z\�\�6B\�\rx�Y\\\\�N\�K�\�5\�\��\\0-r\Zd�`+��A]4\�\�]Y�;3�)\�\�\��*h���H�Wdc\�\�\�\n)��F+B�IO�\��ZLR\�1ii\\\\њJL\�\�I�L\���QE\�\�\Zm?b�ɰ\�J.)�Q\�+	�)ؤ\\\"�\�\�\�JSL��\r�3M�4\�KC�@4\�Ҋw���Q�x�\�a\�R\np\\\\����(�r�QKIJ\�RQHi\�,���E\�q4��\�\�\\\\��f�|O\�\�\�\�p�\�\�\�FRz0�5��\\\\ҒRVc��	sGs\�\��-n�\�\�\�d<�V}屹�m-\��!\�A^\�x~\�]�\�r�e\�8e�\\0\�{W	?�î|\�KDǉ\� �}\ry�(8���n�5TVz33I\�ⶌ|�\�j�\�<��9��6@W��,�.sX�\�t�\�P���\�\�\�Ήp9\nB�9=:\�|�S\�,\�P�㺱�\�P}t�w2���ZGc�\�C+\\\\ګ\�T|�\�9\�\�ۥht8�Q\�_N\�	�\�L�(BAp`w�\�J\��\�\�\�r��[����op\�\�\r\�*�WDdy\�)�N���3�Рu\\\'&�\�X� \�\�\�`��\�I\�qP(\�O>�m��Ȅ\�*ܯ\�k�m\�\�\�Q�d\�8�5\�h� Yp�Hn\�\���\�k\�\�uu�v\\0�\Zgj�\�ߞ�^\�3#�\�p\�׽p՟4��^�J|�=R\�\�:�\r\\\\Ys\\\\V�{䀷�\�Oκ+y\�d\��\n�̧\n\��߅JES��\\\"�!㨭Q�cYj2*\�\�D\�E�2[i���\�:U�\� �\�\�*\�2��\�\�k��[���qT9_<vE-%t�aKIE\\01괕e괔(O޲/+^zǼ�&tS*-IڣZj\�1�j5#��\�P�6\�_�\\\'�Z\�ќbj\�\�qVt���ג\�\�ʗ�wv�\�9\�]n�r�\�H.2��԰ԌNx�F|�ƴ9�\�\�\���ak��\�ѐա���z1i�Β�5�3U��\�*U�_�� ~h\�&i3@\nM\\0\�Q�\\0u&i3FhR�\\\\P1���\�(\\\\vS�@\�*n�1Rm�m\�;��\�\�RO\�4Ӹ�\\\"4\�R��\�U&CE.(\�Q#iE�ɱ 4����E\ZD��)�\��H��R\�E-+�ah�\����i���J.�JL\�N\�.h\�74S�6))\�\�aE�\nH���a�i3N���GX��7\\\\\�?#ukrx?\��}+��%) *\�\�\�\rz�ck�*\�\�\�6\�ڎ\�o��\�QOX��1R^\��9mˎ*h�\�I\�r�\n�8 �Eh\�ɹ:\�)\�t8\�$+\�2�?�m\�俉$�c&\�>��\\0\�X�Ź\r�\�\�V\�B*\�;�W\���AM���\\\"�#<dv�\\0\Z\�\Z#�����-�\��y=Xr0�\�\�|A��4\�\�m�?�\�u7\�,>o�2�\�W\�d��	\�\���pڊ�ݰ�D\�I �&�n|���±\�\�WB�\n�ko:2@\�A�\�\�R\�\�\�E�\�/�lZ�IHg��w�\�\�4\�\�P$�\�[q�\�pkH�\�\�-\�\�r��W\�X�\�\�\�\�y?�jCp�H\�h\�R;-)\\\\�\�x\���(\�V3�-01�\�\n�ǵBT�S�wE\�ՙqX2�:\Z\\\\\�X�cm=\rO��)T\�\�&�/g+tFi��5��\�5ZCS��\�(`��\ZǼ\�Z\�\Zɻ汙\�L�)\��H(\\\'�\�\Z�\rV��i\rU���<�Rr�)���\�8\�I�@�J+\��\\\'���\�i�K$\�9��� �zV��\�1\�ƕ�4m�7�2E[��xG\r�X���ֵ#!�tAI=I�\��M��ٲq\�u�d\�4j\�<�\���69$�묭�4�\�;�N\�\�B\�<RьRU:�M�@\�J\rD\r8\Z2aO5 4�B\�QKH�� �\nE�R�Z@7b�Hh\�CN���KE0��\�\rR!��IO4\�T�hm&)qK�aH)�S�b@i�\�(�h�\Z\\\\\�`Ӂ�RA�\�&h��\�M0��&�Z�4\�.iA�f�\Zd�N��\r\\0I�p5iA�	A�Q�K�.+�\\0�<857vj\�G+\�H?Ƹ�{\�o)�@Q\�ᕆ5\���x^\�[O5sx�\��ٽEaV�6�\�\�\�b�=\�\�s\�\�,�\�\����\�2��VT��яc���ĶIgr�%^=�\�t�eSN\��\\0���8h�1\r9&��Q�0~L.I��\�s\Z\�a��\��\\0��\�5bV\�0�\�\�\\0B.Xg�\��U7\�d�\�_�QUhgi��xZ�\\\" \�\\\"�\�>�TMn3�W3G��c]\�4eg� ��Iizr�\��u�\���5�60�nU�\rK�]ƥu��k2��5�z�+�_�Z>\�\�M\��\\0\Zز��\\02��u�fc8uGEa\�V╺Vl��<�®�lw�.s�]W\\\'�;\�U\��\�\�!���.>V�\r=�����骑�,\�\�d��\r\�֦\�wB��\��*ѕ7f#��!�\�\�Y\r[fif5�ty�)Me\�����4@(c\�\�<T#FV�\�9\Z�L\�NF�$�a\�}�?�w��\�@kF\�\�\�\�+\�涇�\�\�ӱ� )�5\�E��b�\n�j~��#�\�D\�vFs��s��+[��s\�s�W\n�pzTV��NI�R\��\�+�\�4��*�\�Sl\���$\�u\�\�3���\�L֡�F\��i\�b\�s��\�Cop���b�#�\Z��3LCh�\�LD�jU5\\\\\Z�Z�-2`\�\�\�!�\�Ԛ\\\"@i�\��H�H\r;54\�iu%��LCM&�\�I�D1	�f��a5D1M6�\�LAN\�p�!q@�P1i)i(A�L�4\�3Fi���qI��HZ�Mp&�A4���sK�m���O�\�@\�N��Hd�ӳQ�N��f��)2<G�\�^i�O*~�/����\�jW\�\��\\0b$��O}\Z�\��\�r}����\�\�\�\\0\�\�@�םK%־�ae[\�\��G<+6b�kx�\�sF��\�_\�є4[��l�<�\��\�\�Z�\�U�\�&:P��\�\�X\\03F��kc2>�\�>�n�2נ\�A\�V�\�<\\\\��@,F*6��*n��sVK�\�f��\�\�,��dx\�NA�\\0n�rV\�\��v\�\�h\\\"�|�z\�\�\�w\�c�?ƺ	lRq��>��}�\�&�p�4�Z\�\rM=�\�+�\�ָto\�\�+Z\\\"\�q(oƲٲv\�\��\\0hS���\\0c\�\�)\�76��# �ur6\���\\0\�\�� `+D\�\�-5DiųM�ĆB�N:�q\�8����	EIY�bȪ���%zt�f\�]p��\�y�h8;�)Lx5�9��Bs��ُ\�D���\�x4\�j)�L�;U)\Z�\\\\7&�H�d�9M!7�\rtA�ӥah���\�\\\"�xS����\\\"Ƹ*j��1X�=�g\����\r\�EmA^G5i{�4\�\�¢\�z\�Ƕ�8ķ%�ٍ3ʔ�\�iW\�\\\\ջ}r\�\�`락\�^��\\0��c�N�ٙ�\\\'�\��Sŉ|U�ކ�\�Q,`ׂiz|�v���<׵\�җ�B{�\�j\�E\�cQ�&�\�TL*dF�i\�SH�!�\�\�T})sC)�����R\�D\�@j\\0i۪KD���\�9��w&\�Aj�u���8�4�ijij�Cb�M&��Jd1٣4\�)�viA�R\�%�\�y�\�@\�搵3u��R\�f��	��\�\�\�LC�I�nh\�\\0.i3IE\\0.iE6�PKc\�8S�@�:�RS�LQO\�K�R)$(\� \�\�b��V\�ѻz+\\\\V��=\�ɍ\\\\�T\�(=}\�]\\\"m�\n�z�X��\��p\r\�\�\�\�\�����\�]\�Ԏ	�\�\�q$j\�\�:�85LD�#M��(\�+�׼o~Z\�O\\\"\�\�^�\�\�v>⺪3I\�5fT\\\'(;Ş>Z\�L�6��4R�f\�G�=\�nYܫ�\�\�]���\�j��M\�A���8e>�\��xsRИ\�	k�0~����C��ҹ�I\�Tzt�1���f� �j1��ڲ-5Tu֔W	(\��\��Z5!��\�\���+B.G�TLd�4�\�*\�\Zǽ�x�x1\�j\�9\�jc�5SI�6�2�/3�˕a\�ִ)\�k>{e|�\�1;D\�\n\�ilt�\�����f�s���hF\��Vea\�m�4R`0����v��\�Ka\�̋��������u,1��G���^�\�sf\�I1�Z鄹�\�R�#�\�\�	�en*\�\�\�Hc�v5Jf\�գ&P�~Mg\�%X�~Mf\�\\\'5D�\ZNVe�\�\��\�\\\\��{\\\'\�\�q>\�\�KV{\�Dj\�x��sY�#޺{\\\'\r+�\�\�&�k�nc���NrK</J�m�\�[�VHA\�U� 7J� yR#�0W�\�\�H�n��\�\�\n�1\�\Z��m}�^\�X�\�\�1\�Q\�\\\\��2\�\�I\�m<���V�-����qP8���#4��JE4\�a<\�iZ�4\\0�ӃTy�\�J\�L��}VK���\�-�\�U�ӷ\�`\�,o�}A���X9�KRn��f�)�q��\nh�\n.)1N\�-E;�PsFh\\\"�LC�Fi�\�\\0QK@�S��M���A-���m������	�pR\�$)E%(��\r ��\�\�k\�\Z��aEƢ\�\�\�\�\Zv\n�d�X��%�\�\�\�\�HV\��\�\�0�*z�\�\�Ҹy��\\0z���\�3��G���)\�\�L�+.�\�l\��\�������\�f��\�@�@\��=i�v\�c�O�G�\�}*\�`\�ͱ�@zҷs[�\�&�,\�\�3EU\�\��\�\�P3�\�<o|Z\����\�\�>G>\�\�W\�y�\�{��9L�a\�z��Uk�6\�S�6��,��^���ڲ�%-V\�]T�\�-Q\�\�_����[�H\�Xz��/t\�\�:<�q\�ۿ\�C\�\�X\�\�*�0\\\\#G*�U�>��{J��Ъ�w�\�i��3\\\\ݖ�&�\��\�VU\�<U�&g(8�6f�ț\\\\�:Ղ\�<R\�\�bZB\�X\��5~�ީ<|�*H\��\�H�j�o��j\�rf�-f��M��������:\�vڄ���(\�Vq!\�\\\'\�[QZ\�Ƴ\�\�Z��m�BRd�a\�W�\�:n\\\\$��Z�ʎDY�(*z�]+G�\�?&�\�~Mzo�<�9/4���\�@;�\\0��\�S��\��� \�\�(�n?y�\�Eb�s\��\\0\�\Z\�߈H����4�ۼ��\�-z2F�U�f+ri\� Ijkj2\�\�Z7G=o1i��j��\��Hnpq���\�x�Z�\\0\�Na����QR\��\\0.+bzu\�\�W<^��Ld�My�翍G��\�tT+n���z�Ͷ\�T,*Rx�\Z�Ѣ*6�\�@�К\\\"4��\�S$i����a\�	�\�\\\"�HLpjxj�S\�r]\�n�R�b� 5*\�J*QH�N\�O�b�Znh\�E&i3@\�)���m(��P1E<SE8P0��Z(2)�SȦ�	J(��-E�)�\�\�1�\����Gď\�\�W)p\�H�;�֎�\�s�Jۇ�\�G9��\\\"�|�\�\�rԕ\�\�\�!\ZT\�vsV����udy<�ݩ\�GNj\��4\��H\���q�V����\�n�vb\�\�A��d\�Z�*\�[�e��]\r�\\0k�[\�\�?�k[i\�\�DCaպ:\���]\�&�-�\�#*\��Z9\�fU�\�F8�\�t�U�\\\"�eh�Z��\r�LV��8�\ne�\\\\R\nZ\�\��\�\�P1(�\�!�b\Z\�G\�-?\��W`|��\�\�}Et&�i5pRqwG�\�Y\�\Z\�>\�w?� \�\\\\z�]��,�2y��X\�\�5����2��êPkȵ]�\�Z��)&2s������j��uG�C�.Ynw�\�;��դ�0\�q�v�B�s[��J\�\rf���j��^97t5e[5i��8)^�\\\">)�i\�E0�e_\\\"���N)\��4��Ϲ��G-���c\�ɽd�a��T������+D\�\�+\�REhdW�x���\\0n�MOK��$\�\n�\\0\�A\�=�\\0�z.i��8B\�pkZ9w.=���`wb�{̞%\�2��i\�\\\'\�>�T&T�YXj��F5>\��\�\�y6\�h\\\\63���,��׽Kdx�\�ڷ�ެ�-X֗�k^	�\�FL\�\�,̷\�\�\�W�i�\�G��\��\�s^�\\0\�B��=J�)4\�A4\�k\\\"�cP�4�sL4\�3��ъb�B)�����EN£\\\"��)�R\�\�n)\�Q�p\�R\nh\�@\�E�R\�Q�v(\�\\06��\�7\�\�ih4��LR\�E�h\��c�����i�)���\�JR\�݇\�P=ݼ}eS\�9�t��D����\�Tqe�ۊ�=\�\�\���\�T:�F�\�\�[\�j\�\�[�7o\�a^\�R\�1V8O½rj�\�`�Tr	�\\\'VL��c$��\�󃃊p~\�:\��N�u�L\�{\Z�,9�~Յ\�\�T��$>G\\\'����$����z��ƹ�ѷDy T�܉�����V�\�[FL\�\�\�F�A\�j� J��堞~#H\�\��+J	V\�\�$���S\�L�$k^N\rßN+CG�͵a�\�\�sppO�k�jR\�r	\�\��\�J^�ˋ��\\\\\���\�F\r(5\�yh�5��x�\�O&$��\���>���6��n�\����;�\�,��i�>I\\\'�k\Z���\�\�aUE\�=��\�U\�n\�|����\n\�m\�ic\�}\����[8U#ճh?q�\�\��R�Z+\Za�\Za�N\rQ\�t�]^\�\�n�r7C\�O���\�I�/mQ\�\ZƑy\�\�Cʛ-\�J:0�\\0\Z��\�\\\\\\0Z�7Sӭuk\\\'���<l?}G�y6��\�xr�\\0d�x�\�^\�=�rԧmQ\�a�\n~\�;;�\�9�$�\Z\�4�H\\0k����k$\�\�}<\�\�sY�\\\\���du�L\�Ĳ*�\��\�g�\�8\\\'\�w��\�a��y���i<\�FA\���\�ӹ��\�v\\\"R\�\��bH�HPaPm�4JMv,Ujvj0y��ZCH\Z�\�\�\Z\\\\�\��\\\"°5\�\��$\�+�=\�\�x\�e��\��\\0\�\�.��5�u\\0{r=�R\�ơ\��\�cr��30\�Q�[��q\\\\�����\�N\��\�,̵f-H�5M���i\�\�ov�\�z��/�\�Fy�F\��D+\�|\�.��⽊���+\Z��%�4\�i\�L&�CbM&�i�\�\�њni	�\�5iA�&�h&��\\0)�P)\�\\0���@\�(\\0�\\0S�@\n��j�x�a�1K�\\\\PSM:�\�!��ZJ`-(��)�K�P*�ޥ� �\��\�I��z\\\"\�N�N}R\��>cz/Oΰo5Y��	ڟ\�*��ڱ�^\�T0\�\�#bmby�©Iw+r�1���d\�c�\�f\�\�\�\n1]\\\"B�ɩ�2�����Mj@\�@�T�5m�z\�\�\�֬9Vt,G�KQs\�G<\\\'�\�Ҭ,d�s(�jR);3lqos\�Rg\�\\\'�}EOօ>�Q��ϵI|mL,.J\�NOj\�\�|Kg�&-b�g<\\0_�565M���g�al�\�QYS�1�`���\\0\�WQ=�G\�s\�K�Q�i7�~S��=+\��?��\����nQ�{��Sq�ȡ^5/n�\�4�03\���8\�\�#\�52\�,S�\\\\\��\\0H^1�c�bI��_]A��ʯ�R趣w�7\�q�k*\�e�}�<9�\�Sr~hX�\�S���a�W�#і�8\�e\�4grTd�\�W+�j�\�2�%-\�Aзֺ�5ythʫ�3�G$��\����B�9��sZ:m�\�^?J[ \\\\d�\�\�D�\�Ӛ\�\�ݞ�\� ���r1Ҷ�BF�0\\0�H\�z��B�\����khw<\�K\�!\Z�cR1�Xև(\�\�\�\�\�4\�i�\��\�WP��\�,\�\�\�0��A�6i�\�\��<�YѮ�=}\�^ݏ\�\�\�G���l�1\�zv�em�i��ux\�\�\����]GO�\�.�0&\\\"~G��Z���=\\\\>#�r\�s��\�95���\�\�qv�����lxSX\�\�qL\��uK\�\�c\\\'.~b;�\��\�c\n�h\��WKkK?�L��aǪ�t�͎~5\�F�\��q�e�%\�\Z	�d\Zk\n\�\�jN��\\\'�VȠ<\ZM\��\�Fx<\�\�:y\�\�\��75\�\�|��\�Mg�\Z��n{�hoX�V\�\�E�Ƴ<\n׈�\�9?ۍ�\�5\�M\��\�+\\\\�\�t�&[��w\�\\\\4\�y����a$S\�\�\�W� �\��������M�{�^��6b_�y�\�.�oz�]\\\"L¼���!Gsa�3R7J������M8���2X\�i	��R�+�n�uE��u�&iE0\Zp4H)\�S�\\0\�N�)\�-&i\nZ-њ1K�\\0JCKHh��\�Jb\\0)�j7�\�՘��_�j4�vEMSW\��\�ޟJ\�圻rI��\�\\\'fb9\�֡^�\�:�L�)QPD\��ZM�\\0�@_�hiq�++�)<\�S��8\�\�q�\�{\�IX� t���QH|W$6s�[6��8ϥs\�Ss\�h\�!�%\\\"�\�Ӯ\n\�M8\\\'�Gjx�\�\�g\\\'�W��Ѕ�\��v�W\���mJ>�>٫�/\��5m��\�~��KY$\�e`tA\��RHKMO8\�Xg\\\"\�H�\���W7q#\�t�Q�\�\�kۦ��e\�$K \�s��6��Ǻ2W\�C���MZ��\�[[h�͒IZX<��.p\n\�ڹ��!U�@\�J\�ma/�y��\�1\�r��z1�79d�0{Tms�����m*\�\�x�q\�pj�:Z@6��>���:=�Z\�\�\�t�B�\�TF���\�[~\�_C�k�M,�?t(\�¶�\��*�M�Ҫ*\�\�sjQ\�{�Y�o�\�@�s�\�\�z\n�gnA\�A���9#�]�_v)�]\�4�aT��-��|��FX�\\0\�CJx�\�\\\".~\�㎉�4\�\�eR�*�\\\'��[X\�y�oZ��Rj65Е�9ɷv\�5+5Fƙ,k5E�sS)�<S\�0S�Gv\�d�W;}k\�C2S��\�.��aY/�\�۵4���k{a&�pG-xj\�|�N\�\\\\L�谞I�&��O졨Had	��\�]E�0i�\�\�G��������\�\�x�\�\�\�\�\\\\\�\\0\�\�Լv�E\\\"�`)O+s�x\�9 ���u\\0jq9\�JpFA\�*�\Z����S�T\�\����4\���(\� >^���\�M�6蹮b*\�4\��q^T{�\��\nՂ]ج&\\0�0�v&h�~�\�?J\�n�$�+��?�9��2�f\��G\�>��q�5?5�4���@G��R\��G\�\\\"��\�l¿J��z��o�\�\\\'Ҋ��οvTTL\�)�1�r�\\\\c5D\�J\�cTCc�\�KTe�	���o�uBZ�\�\�r�z�Z��Q\�b\�H\rVV�U�*\�4�j%5 4\�\�<S<P1H)i\�KIN\�\\06�R\�_\��n�������\�,�I��h�LW\r��[�Պ�l�_H:���%��\\\\\��rm\��A{u\���L,z���}�U+z��\�\�\�5ԅ������U\�Z|O\�5��\�f�w?}�u�\�Oʻ;e�\�5�6W��*�\�\\\"��ɞ�KM\�f}�\�ڡ�m\\\\\�8��$$Fq��\�G�;�\\\\\�b2�\�\�\�j��q隖\�2��i\\\"P�gґ�C@\�ps��,K�����Z\�\�\�I$69?52�E�\�PG����\�T\�$`AU�_�\\0S��\�U\n�B0\�՞��T�ns���\�\�R\�H�\�\\0����\n\�G\�\�sS�095i�\\\"\�\�\�w��q�\�\�TL��NX�⯘\\\\�\�\�0\\0���nɨ\�\\\\搻`��\���D���L\�~�\��\�eY�hf�\�5\�\�sPI|�3���j,�Ҫ���ԥ\�\�۽h+�NO֙��F�S\�\�\�g#\\0z\�\�M��qI^N\�Wl�\�p�\��5��\\0\\0`��aj,��\�.ù�[���<�\�9\�\�\�S����3U�\\\\�2\�\�jajd�8�\�w�n�\�@�N\r.j���ȯ�\\\"\\\"�9#5�%T \�\�[\�u�K�L� �\�XWV��W�Pk��o:�1��\�j[N�\�Q�o�q+4�͹X��K-H\�\Z�\�M\�\��\�\�V\�Wn\rQ�\�J�l\ZS�ez\�I��	�3\�f�9\�	�\���\�H�\Zk��\�nh\�r�aX5g\�\�\rZ��P̀�=:~@\�Qe]I`O�^�G�c��ZZY\�\�s�\�ii\r�\�X�K��z��q\�\\\\]\�&c\�k��[��p��ywG\�ס�g�]�\�@}�=\�\���h\�1��:j�)S+8�\�\n\��Wl��U�\�2m�~�\�\�c\�\�\�\�4�\�Tlk��75\Z��&�Ki�ӍFz\�C�i4\Zi4\�lPjEj�4�4ɹi\Z�CUPՄ�Re�52\�t5SQ���.u�`8\�\�\�c�\\0\�Zf�ԀW�\�?�kBV\�\�\�\�Bq\Z��?�s7\Z�y7-���\\0�f\�\�~�~��h�g�⳵h�J��[[��/ \��\\0|�5�\�\���ѫ\\\\yg�q�\���γ��Y�>�\�>V{\��\�֌R\�+�\�T\\\"�\���W-�|nԥt�.\�\�zW2\�+\�\�qA\\\\�\�u/�\\\'\�	\�\���B|��.+��yfb\�H\�ǒX\�`�Lz\r\�h\�O\�;m;\���\�&{Kѣ]90NrI��\��?\�\�\\\\ZTv�E�2UІVA2���p������`3�\\0\�W18\�w�Jg��%ּ;i��D���p\��	a$ן(\��#$�9���\���\�{km�8\�\�,KH0�Ԣ\�ĸ\�>\�	9+h)�G\�Yw��9�jK�gU!\�XOp͜�5M�b\�UU?2�K\��Q\\\\�wq�Pj\�w�8��+�\�΁\\\'=	��\�J|k��i\\\\1S\��)8&�d8��p^�\�nsի|�>s\�1����zզJ�\�Y�UZd\Z�\�\\0�XS\�H#\�\�\\\"�0�X�s�Z.\��j\�Xo\�*\���\n�W5��\�<�\�ǰ���{���pDI\�b��Wn\�\�j0W��/H;]�5ZA�NA��B=N\�\�\�6VАR%\�?��O\�jȭ\�\���E��\�:F�+�6h��\�Y�.��jE��f�Y=��~������V�Et0�.����\�, !���0�\\\"��\��Wժ\ZPj\�d\�\�\�ԛ�\�n�+����\�\�\�\�3TE���jd�<�&\�M\�q\�wS)E1ܐ5�\��S��;�\�ZPl��c\�j� Eu`\�&�9��\�A�j��\�[j\r�k\�|G9�WzH\�<\�k,\�\�z�N\�ɩluQJ�֌R�5\�\�ߜ�սix4	��I�\ZEnj\\\'+/*pj0\�a���\�֧��=k=\����&њ\\0�#���\�.jLV��q^��\�$_��\�ޖ\�eV\�H5kN\\\\0�\�ĴuA�C�W/�[fB�WGL_�eި$\�p\��\n<��j�\�`\�\�\\\'��	�\�$�\\0y��)�]8����\��i=N�\ZLf[�5\�\Zjm�}+\��mgJI\�o!V�D\��;�Ǔq�\\0��\�T\�\�\�Z�lj2iX\�E�qI�ɤyFY�\�/<A�\�)7\Z��x\�d���O1�M0\�{�/@�ȉ\�a�\\0<\��8�v�\�̭�c�*�\\0�3\��,�\��M5\��|H��\�<1��b\�5�w\��~�J˩ϴ�C��b���2g�Py`?\ZS,q�w�Vf��s]\�\��摏�bi\�k�n\�9�\�\�q�\��˟xz\�\�mVôd�����>%�aA�\\0Ns�H�Ҽ$\�[�\�B��\�W-QH�/|KԵ ��[3ǘ\�\\\\}{~�p2N�%���1\�o���\�\�ӣ��ѹ��[\n\�`\�\�qU\�Zm\r2|\Z��ԱjP\��)qKKUbD\�(��b��M������\\\"��с�\\0�_�Z�=���\�\\\"\\\'YP{7�ν!��#\�?\r/�\�\�\�v\�&��~��U\�\�\\\\6@\��\n\�\�=?�\�y\�F\�Xu�;\��o\�sҰ:)O<\�>��=�9!r;ּ�7\�T�*�<��4�3M�� ���\�@��Շ�P~��\�F�qƄU\��\�T+�T߻Q�b�y��8���\�}��\�?:h,]{�\� J�%ʸ \\\'�Wi\��\�s��$��x�W#���\r�l��ڟ�q�\�Ҩأ]\�J@\�q��c,���\�4ބ.\�j\�X9+jΛO���ϭi����VrƊ\�c\�/AWH��P���u\��\�\�2�(\�(��(4�\�\�QLc�I�i4\�h�n���n���Z�f�-�i4\n\�M&i3E\�u-4R\��:�)E�RR\�1�\�ǊJk)�\�T�U��.j���Qfl��d\�\�қmvў3�����r*cw9\\0֚�\�u���q\�_�\�8�\�\�\\\"�c\�\��\��T;4�	܇�$\�0\�֨\�߇&�\�I�\ZB<ShYB\�\�(]\�\�T�\r�=\��Ֆ\�\�f�ʚW+\�د-\�\�\�z?^K잓�k\Zm���\�=\��A\��+O���\�\�)\�\�\�4i ܬs\�P�\�Z\���3\�N[hvW?u�m�C�.O\�\\\\�爵k�&\��f\�`\���͍HA��\�\�ds\�N[�i]\�Y؟sI��EQ#ÑV-�\�m%[\�$N:b*�\�+���3_�P�L�\n?\�����s�WX��E,��ּ�4���28�7�|I�\�9i肋=�q�Us3\\\\ʪ=\����Vc}©;��-�h�3�}\rTudl0 ե\�\�NwY\�}\�	��Q�RI^W�P��tPf�\Zi�RU�Y\�j(M[�\�(�S-��t<qU�\�\�HZ�\�]�	*`x�\�HD�>:i\�\�\�T��Q�pЅ�@���\\0\�Z0�)\�\�\�\\0^\�nM��4�\��\\\\!?L�_@�_p}+\��˞7\�*����n\�Td�W%j�߃z4,�,K����\r\�z\�K\�.��?�s�\�N�v\�ˏL�\�;R�\�\�s\Z\�,\�/N��s}g��e��ғ�\�&���)�\�1�΄}\�0��4(\�`rQճ:]Ev��\�\�j���c� \\\\��\�[�6�����\���kn\�L���\\0�{tF��2ߙ浍\�\�.+\�\�\�4Mr�\�)�3�r|��s[�-v�\\0�\�\�縌�\�\�\�L5��rOR[h`A\�M*܆0��;\���jGp�H�QG@��aL5�IlsJr�\�CIKITf�\�:��&&)1N4\�d��)�\�Q�Hj6\�٩��XS\r4f��3HC�\�6�H�x�\nx�i\�SE:�\�H1F)sFi�\�i\Z��k\n\�U��OUe�R)Mި�]��?z�o�� ?\�_CVc���N\�\�޲\�:\Z»�H|nU�B)�Xw�\�\�t\�\\\\�V�\�Y0\Z�-;\�1�/\�nx�J\�Ḷ�.\��с�S�W>r�jpSSD�Zkpk\n\�\��jı]\�T�U�w܄U+l\\\'ܬA�\�4�����z�\\\"7j>\�OCN�dխ�\\\\\�%q6Ph]{S1\�W�v4׈0ȣ�.R\�%L\�\�\�dT\�bSD\�5)T\�Ё��`��`A\��M2\�sZ\�+$�\Z{D���_J��\Z|R�5\�ʰ\�R�Sj\��2>�V(A��\�&Om֮�\�U�^j\�0��6%�\�#\�D\�55\�ɪ\�pk7�\�\�\�\�TRrhF\�\�6\�!�3RH<P�<Ԋ*Lb� \ZR8���!(��y�bf�ҜSi\\0��^��\�\�6q����/#�㹯E}k�F#ӭ�F\\0�\\0��cV\nV��*��\�Ǡj�/�i`�L}\�\��U��\�\�<�7�\�A���\��\�\\\"�u����h�u�U�@���O\�j\��MF\�I6\�\�F�i\�Q�d1��M9�D\�A-��\�Z酩�\�\�њ�u��r@ii�Ӂ�M\�4\�SIL���b\Zi�RSP,*3S0���KCh\���&)E\�)N�)�R) ��PPR�Jp\\0\�HÊp0€T��KWdJj\��Sz�-Tz͛Gb�\�C\\\\��\�\�Cq\�\�=�t4!����Ƨѵ��>\�Ue\\\"&<�ګ\��\�TA��\����\�L�\�D椐�掃\�6��l=W����-\�1\�\�jd\��æZ@�5M\\\\KA�.*�-D0*\\\\\�kH�V~��ݍ)��d���U\�1V��Lu�\��2��\�\�0i��\�]�ˊ�oWW�\�\�S�	�*\�\��z\�IY�\�&\rZ\�\�2G5AO5r�N,b0J�t�@��Q�p:\�LsW\\\'���g-\�C\��z�Q��TR8F}:Ӏ\�\\0T�*\�\\\"��h\�GA��4�搚N�Ҹ\�g&�m(4&\\0i��L4�P܊�\�\�b\�\��\�ʾC^M}n6\�ľ�\�Q2�K�i�\�4�fX��jy5\Zd��j&4\�5\Zd65�@\�Of�]�3�\�L-C\Zfi��;4�\�h\��(4�j\\0j@i�䙣4\�ih\�ZJ3N\�)�S�M&��\n��JƘE\�-<\npZWQ�i�i�ivҸ�F�N�.\�.U�\��R‱)\�Q�����(Zi\�(eₒ)\�*�\�ZR�Fe\�@\�eM\�Sz�p:\��e��\�C\\\\��\�\�As\�\�;��4���\�\�5I~�\\\\�?1�k���0㌫f�~XՇ\�j���\Z��\�z�C&N�0\�Q\�*C\�h�b��\�*�njx��i�צ�#�`\\0�J\�)JBp(^^�>C�H�&�\�Yb\�j\�qQ¸ZRrkE�!�.f����\�~CT[���Qz\�\�;U!֮AJ;�.E.x��F8�$3*�z�C�b�5�\�hUZ�E��\�ঞF�\nil����y����\�\�.\�\�\�%\�d\�\�`G��x\�!�4\���4�\\0/W\��ƿA_ \�\�qܧ���cD�\�I��a5��\�59�Dƙ-�ơf�f�X\�!��4\�5\ZfM�M%&iEE�\� ���I�LP%�\rD)�\�.h�f�\�)4\�i	������I�����i▟���\�Rb�(b�m(\�P��E;L(�aNQC\n\n*J8�3\nДU�Zc&\�pk6JӺ\�k.C֡��7?t\�;��\rt7\\\'�\\\\\�z\�9{\��\Z��z�ݟ�\�T�\�\r������MS\\\"\n`2\n2T�j�#\ZВ&\�R!�\�9jP\�19�\nZ�C<Tni\�x�\�cC&��2ri���ZA�RHm�\\\'��L\�⨑�����V\�\�CP\�C�d\�؆*�K�V��qX\��f��Q�Z6H\�ɥ@Z}$�\\0��\n\\0\�1۰�\�cB-0d\�\�\n)-@���Iɥc�֛ކ�vh\�Q֐8\�4�iiZ`&=\���R\\0\�5�\�p�=|��E}u\�T\�hCM&�\�M@\�1�\\\'5+T-L��\\\\\�,\�+\�w�d\�3TD�Njh�d\�)B\�\�\�)!�R\�	N	H�,P��\�|�\�E��T�)\n\�))1Rb�E�\�pb����*�xO��BN\�\nE)1N�\�\\03b��1@\r\�E\\0�\�)Z�E1�\�(aN�\�)%Ba\�hKT&\�iȻ\�\Zʒ�/Zː\�1��=\rs��\�\�Etx5\�\�G��&sx\�h��X��ƫG����u��Ԓu��\�S\�*P)�)\�\�!1\�Fǚ��D�i�!�\�֣\�OZ�Q0�&�\ZBj\����&�y��T\�=�F�\�O4�\�I��ҙ#\�b��]\�&�v��ɡFM��4�J\�F�%\\0`QZ85(晊x��p�\�\�\�j.�\\\'$\�z���\�=+0��SI\�V�4\�HO4T�����\\0\�ݩ(&�@\n^�SE}s\�\n7��_\\\"�Q_[ض�:\��\\0��\�TT*$�S\rJj3YF¢aS0�\�S%�\�Uwi\�@\�T�\�\�h	Sl�	N\�r��Ԋ�\��\\\"�\\\"�F�\�\�\�\�ӂҹ����l�vҕ�>R�ҵ9ZaZw%Ā�4�NE0�d4E��;b�6\nu �\�\\\"�QKI@\�\�(�Ҋ:����\�f��ALD�R�D� 4\r-#��SMsAEi�P��j\�\�Y�\r!\�˼<\Zʒ����d\�P\�3\���H�\�\�\�\rsZ�\�	�\�\�\�5^?�S\�u5}i�\�֕�\�NJ��<�\nh\�Nn�\�\�T\\\"L�Q1\�=*��\r��\�<RC�N�v�BW��!E5z\�i�L\��;\��f\�3�+R\n��**$���ZD�Ԙ\�^�\�(\��E0\�\�i;ӇJ\\0r�L��)�H�sHi\Z��߁�U �h#p�S�\��hB98曜c\�N��j\\0R\��\�8)A\�0tA��\�րE%�^����\�f�`�\\0޶��\\0㢾M\�>���\�?\�Z\��\\0\�\��\\0T\�b�x\�\r<\�\rd1�S�OJ������\�\�\�Q�d\�F\�}\�Bӂ\�Ӆ!TS���x�Rb��Ԇ0�a#S\r4&FE0��\�\r2\Z#\���i�CCh\�\�;S$vh�w�0\�(4\�(�\�Fi��-\n �\n`8S��\np\�AD�\�\\\\\�)�Ґʓ\Z�9\�W�\�Y�P4e]��%_�\�T$\�P\�Fm\�C\\\\Τ~�t�}\rsZ��R9���j�Է=j(��h�\�',2);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-29 23:07:05