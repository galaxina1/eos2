<?php

class Model
{

    private $db;

    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $password = 'root';
        $dbName = 'EosConseil';

        try {

            $this->db = new PDO(
                "mysql:host=$host;dbname=$dbName;charset=utf8",
                $user,
                $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // MY ACCOUNT ----------------------------------------------------------------------
    // Inscription : verify if email already exists
    public function verifyEmailInscription($email)
    {
        try {
            $request = $this->db->prepare("SELECT COUNT(*) FROM UserAccount 
                WHERE email_account=?");
            $request->execute([$email]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }



    // Inscription My Account----------------------
    public function inscription($email, $password, $name)
    {
        try {

            $request = $this->db->prepare("INSERT INTO UserAccount 
            (email_account,password_account,name_account,date_inscription_account,admin_account) VALUES (?,?,?,NOW(),0)");
            $execute = [$email, $password, $name];
            $request->execute($execute);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
    // Recuperate User from UserAccount ----------------------------
    public function getUser($emailConnect)
    {
        try {
            $request = $this->db->prepare('SELECT * FROM UserAccount
             WHERE email_account = ?');
            $request->execute([$emailConnect]);
            return $request->fetch();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
    }

    // Recuperate All Users for Admin 
    public function getUsers()
    {
        try {
            $request = $this->db->prepare('SELECT * FROM UserAccount');
            $request->execute([]);
            return $request->fetchAll();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
    }

    // Delete Account
    public function deleteAccount($idAccount)
    {
        try {
            $request = $this->db->prepare("DELETE FROM UserAccount WHERE id_user_account = ?");
            $request->execute([$idAccount]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }




    // FAVORITES ------------------------------------------------------------
    // INSERT USER_ID AND GOOD_ID INTO FAVORITES
    public function insertFavorite($bienId, $userId)
    {
        try {

            $request = $this->db->prepare("INSERT INTO Favorites 
            (goods_id,user_account_id) VALUES (?,?)");
            $execute = [$bienId, $userId];
            $request->execute($execute);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // RECUPERATE FAVORITES 
    public function getFavorites($id)
    {
        try {
            $request = $this->db->prepare('SELECT * FROM Favorites
             LEFT JOIN Goods ON goods_id = id_goods
             LEFT JOIN TypeCommerce ON type_commerce_id = id_type_commerce
             WHERE user_account_id = ? ORDER BY goods_id DESC');
            $request->execute([$id]);
            return $request->fetchAll();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
    }
    // DELETE A FAVORITE
    public function deleteFavorite($idfavori)
    {
        try {

            $request = $this->db->prepare("DELETE FROM Favorites WHERE id_favorites = ?");
            $request->execute([$idfavori]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
    // Verify if Favorite already exists in User Favorites
    public function verifyFavorite($biensId, $accountId)
    {
        try {
            $request = $this->db->prepare("SELECT COUNT(*) FROM Favorites
                WHERE goods_id=? AND user_account_id=?");
            $request->execute([$biensId, $accountId]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }


    // NEWSLETTER SUBSCRIPTION -------------------------
    // Verify if email already exists
    public function verifyEmailNewsletter($email)
    {
        try {
            $request = $this->db->prepare("SELECT COUNT(*) FROM UserNewsletter 
                WHERE email_newsletter=?");
            $request->execute([$email]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Insert
    public function Newsletter($emailNewsletter, $checkNewsletter, $dateNewsletter)
    {
        try {

            $request = $this->db->prepare("INSERT INTO UserNewsletter 
            (email_newsletter,check_newsletter,date_newsletter) VALUES (?,?,?)");
            $execute = [$emailNewsletter, $checkNewsletter, $dateNewsletter];
            $request->execute($execute);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Récuperate users for admin
    public function getUsersNewsletter()
    {
        try {
            $request = $this->db->prepare('SELECT * FROM UserNewsletter');
            $request->execute([]);
            return $request->fetchAll();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
    }

    // Delete user newsletter
    public function deleteUserNewsletter($idNewsletter)
    {
        try {
            $request = $this->db->prepare("DELETE FROM UserNewsletter WHERE id_user_newsletter = ?");
            $request->execute([$idNewsletter]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }



    // CONTACT FORM ---------------------------------------------------------------------
    // 1.Insert Contact
    public function insertContact(
        $name,
        $phone,
        $address,
        $city,
        $subject,
        $email,
        $society,
        $zipcode,
        $country,
        $message,
        $privacy,
        $date
    ) {
        try {

            $request = $this->db->prepare("INSERT INTO UserContact 
            (name_contact,phone_contact,address_contact,city_contact,subject_contact,
            email_contact,society_contact,zip_code_contact,
            country_contact,message_contact,privacy_contact,date_contact) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $execute = [
                $name, $phone, $address, $city, $subject, $email,
                $society, $zipcode, $country, $message, $privacy, $date
            ];
            $request->execute($execute);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // 2.Recuperate All Contacts for Admin
    public function getContact()
    {
        try {
            $request = $this->db->prepare('SELECT * FROM UserContact ORDER BY date_contact DESC');
            $request->execute([]);
            return $request->fetchAll();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
    }

    // 3.Delete Contact by Admin
    public function deleteContact($idContact)
    {
        try {
            $request = $this->db->prepare("DELETE FROM UserContact WHERE id_user_contact = ?");
            $request->execute([$idContact]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }


    //  IMAGES SLIDE HOME PAGE ------------------------------------------------------------------
    // Insert Image Slide Home Page----------------------------------------------------------
    public function insertImageSlideHomePage($image)
    {
        try {

            $request = $this->db->prepare("INSERT INTO SlideHomePage
            (title_slide_homepage) VALUES (?)");
            $execute = [$image];
            $request->execute($execute);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Recuperate All Images Slide Home Page-----------------------------------------------------------

    public function getImagesSlideHomePage()
    {
        try {
            $request = $this->db->prepare("SELECT * FROM SlideHomePage");
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Récuperate Image SLIDE Home Page depending ID
    public function getImageSlideHomePageId($id)
    {
        try {
            $request = $this->db->prepare("SELECT * FROM SlideHomePage WHERE id_slide_homepage = ?");
            $request->execute([$id]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Delete Image Slide Home Page
    public function deleteImageSlideHomePage($id)
    {
        try {

            $request = $this->db->prepare("DELETE FROM SlideHomePage WHERE id_slide_homePage = ?");
            $request->execute([$id]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    //  Update Image Slide Home Page
    public function updateImageSlideHomePage($title, $id)
    {
        try {

            $request = $this->db->prepare("UPDATE SlideHomePage SET title_slide_homepage=? WHERE id_slide_homepage=?");
            $request->execute([$title, $id]);
            //   var_dump($id);

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
    // SLIDE 2 ————————————————————————————————————————————————————————————————————

    // Insert Image Slide Aside
    public function insertImageSlideAside($image2)
    {
        try {

            $request = $this->db->prepare("INSERT INTO SlideAside 
            (title_slide_aside) VALUES (?)");
            $execute = [$image2];
            $request->execute($execute);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Recuperate All Images Slide Aside 
    public function getImagesSlideAside()
    {
        try {
            $request = $this->db->prepare("SELECT * FROM SlideAside ORDER BY id_slide_aside DESC");
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Recuperate Image Slide Aside depending ID
    public function getImageSlideAsideId($id)
    {
        try {
            $request = $this->db->prepare("SELECT * FROM SlideAside WHERE id_slide_aside = ?");
            $request->execute([$id]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Delete Image Slide Aside
    public function deleteImageSlideAside($id)
    {
        try {

            $request = $this->db->prepare("DELETE FROM SlideAside WHERE id_slide_aside = ?");
            $request->execute([$id]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
    //  Update Image Slide Aside
    public function updateImageSlideAside($title, $id)
    {
        try {

            $request = $this->db->prepare("UPDATE SlideAside SET title_slide_aside=? WHERE id_slide_aside=?");
            $request->execute([$title, $id]);
            //   var_dump($id);

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
    // GOODS -----------------------------------------------------------------------
    // Insert a Good
    public function insertGood(
        $prix,
        $typeCommerce,
        $reference,
        $description,
        $secteur,
        $categorie,
        $caTotalHt,
        $caHotel,
        $caRestauration,
        $caBar,
        $ebe,
        $nbChambres,
        $tauxOccupation,
        $prixMoyenChambres,
        $nbPlacesInterieur,
        $nbPlacesTerrasse,
        $horairesOuverture,
        $fermetureHebdo,
        $conges,
        $pLimonade,
        $qBiereAn,
        $qCafeSemaine,
        $nbSalaries,
        $fermeSoir,
        $lic4,
        $gaineExtraction,
        $climatisation,
        $terrasse,
        $veranda,
        $bureau,
        $parking,
        $alaune

    ) {
        try {

            $request = $this->db->prepare("INSERT INTO Goods 
            (price,
            type_commerce_id,
            reference,
            good_description,
            sector,
            category_hotel_id,
            turnover_excluding_taxes,
            turnover_hotel,
            turnover_restaurant,
            turnover_bar,
            brut_operating_surplus,
            nb_rooms,
            occupancy_rate,
            average_room_price,
            nb_interior_seats,
            nb_terrace_seats,
            opening_hours,
            weekly_closure,
            holidays,
            p_lemonade,
            q_beer_year,
            q_coffee_week,
            nb_employees,
            closed_evening,
            lic_4,
            extraction_sheath,
            air_conditioning,
            terrace,
            veranda,
            office,
            parking,
            headline,
            creation_date
            )
             VALUES (?,?,?,?,?,?,?,?,?,?,
             ?,?,?,?,?,?,?,?,?,?,
             ?,?,?,?,?,?,?,?,?,?,?,?,NOW())");
            $execute = [
                $prix, $typeCommerce, $reference, $description, $secteur, $categorie,
                $caTotalHt, $caHotel, $caRestauration, $caBar, $ebe, $nbChambres, $tauxOccupation, $prixMoyenChambres,
                $nbPlacesInterieur, $nbPlacesTerrasse, $horairesOuverture, $fermetureHebdo, $conges, $pLimonade,
                $qBiereAn, $qCafeSemaine, $nbSalaries, $fermeSoir, $lic4, $gaineExtraction, $climatisation,
                $terrasse, $veranda, $bureau, $parking, $alaune
            ];
            $request->execute($execute);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Show description and title from Goods depending on Type Commerce

    public function show($typeCommerceId)
    {
        try {
            $request = $this->db->prepare("SELECT * FROM Goods 
            WHERE type_commerce_id=? ORDER BY price DESC");
            $request->execute([$typeCommerceId]);
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    //   Show Details of a Good

    public function showDetails($type, $id)
    {
        try {
            $request = $this->db->prepare("SELECT * FROM Goods 
            LEFT JOIN TypeCommerce ON type_commerce_id = id_type_commerce
            LEFT JOIN CategoryHotel ON category_hotel_id = id_category_hotel
            WHERE type_commerce_id=? AND id_goods=?");
            $request->execute([$type, $id]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
    // Récuperate the last two Goods for My Account
    public function goods()
    {
        try {
            $request = $this->db->prepare("SELECT * FROM Goods
        LEFT JOIN TypeCommerce ON type_commerce_id = id_type_commerce
        ORDER BY creation_date DESC LIMIT 2");
            $request->execute([]);
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Delete a Good
    public function deleteGood($id)
    {
        try {

            $request = $this->db->prepare("DELETE FROM Goods
            WHERE id_goods = ?");
            $request->execute([$id]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Modify a Good
    public function updateGood(
        $prix,
        $typeCommerce,
        $reference,
        $description,
        $secteur,
        $categorie,
        $caTotalHt,
        $caHotel,
        $caRestauration,
        $caBar,
        $ebe,
        $nbChambres,
        $tauxOccupation,
        $prixMoyenChambres,
        $nbPlacesInterieur,
        $nbPlacesTerrasse,
        $horairesOuverture,
        $fermetureHebdo,
        $conges,
        $pLimonade,
        $qBiereAn,
        $qCafeSemaine,
        $nbSalaries,
        $fermeSoir,
        $lic4,
        $gaineExtraction,
        $climatisation,
        $terrasse,
        $veranda,
        $bureau,
        $parking,
        $alaune,
        $id
    ) {
        try {

            $request = $this->db->prepare("UPDATE Goods SET 
            price=?,
            type_commerce_id=?,
            reference=?,
            good_description=?,
            sector=?,
            category_hotel_id=?,
            turnover_excluding_taxes=?,
            turnover_hotel=?,
            turnover_restaurant=?,
            turnover_bar=?,
            brut_operating_surplus=?,
            nb_rooms=?,
            occupancy_rate=?,
            average_room_price=?,
            nb_interior_seats=?,
            nb_terrace_seats=?,
            opening_hours=?,
            weekly_closure=?,
            holidays=?,
            p_lemonade=?,
            q_beer_year=?,
            q_coffee_week=?,
            nb_employees=?,
            closed_evening=?,
            lic_4=?,
            extraction_sheath=?,
            air_conditioning=?,
            terrace=?,
            veranda=?,
            office=?,
            parking=?,
            headline=?,
            creation_date=NOW() WHERE id_goods=?");
            $request->execute([
                $prix, $typeCommerce, $reference, $description, $secteur, $categorie,
                $caTotalHt, $caHotel, $caRestauration, $caBar, $ebe, $nbChambres, $tauxOccupation, $prixMoyenChambres,
                $nbPlacesInterieur, $nbPlacesTerrasse, $horairesOuverture, $fermetureHebdo, $conges, $pLimonade,
                $qBiereAn, $qCafeSemaine, $nbSalaries, $fermeSoir, $lic4, $gaineExtraction, $climatisation,
                $terrasse, $veranda, $bureau, $parking, $alaune, $id
            ]);
            //   var_dump($id);

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    //  Vérifier la référence du bien
    public function verifyReference($ref)
    {
        try {
            $request = $this->db->prepare("SELECT COUNT(*) FROM Goods
            WHERE reference=?");
            $request->execute([$ref]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }



    // NEWS --------------------------------------------------------
    // Insert News ------------------- ok
    public function insertNews($date, $title, $text, $photo, $text2, $video)
    {
        try {

            $request = $this->db->prepare("INSERT INTO News 
            (date_news,title_news,text_news,photo_news,text2_news,video_news) VALUES (?,?,?,?,?,?)");
            $execute = [$date, $title, $text, $photo, $text2, $video];
            $request->execute($execute);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Show News -----------------ok
    public function showNews()
    {
        try {
            $request = $this->db->prepare("SELECT * FROM News ORDER BY date_news DESC");
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Détails Actu -------------------------ok
    public function showNewsDetails($id)
    {
        try {
            $request = $this->db->prepare("SELECT * FROM News WHERE id_news=?");
            $request->execute([$id]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }



    // Supprimer Actu
    public function deleteNews($id)
    {
        try {

            $request = $this->db->prepare("DELETE FROM News WHERE id_news = ?");
            $request->execute([$id]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Modify News
    public function updateNews(
        $date,
        $title,
        $text,
        $photo,
        $text2,
        $video,
        $id
    ) {
        try {

            $request = $this->db->prepare("UPDATE News SET 
            date_news=?,
            title_news=?,
            text_news=?,
            photo_news=?,
            text2_news=?,
            video_news=?
            WHERE id_news=?");
            $request->execute([$date, $title, $text, $photo, $text2, $video, $id]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // Afficher l'actu la plus récente
    public function showLastNews()
    {
        try {
            $request = $this->db->prepare("SELECT * FROM News ORDER BY date_news DESC LIMIT 1");
            $request->execute();
            $result = $request->fetchAll();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    // A LA UNE
    public function alaUne($type, $alaune)
    {
        try {
            $request = $this->db->prepare("SELECT * FROM Goods 
            LEFT JOIN TypeCommerce ON type_commerce_id = id_type_commerce
            LEFT JOIN CategoryHotel ON category_hotel_id = id_category_hotel
            WHERE type_commerce_id=? AND headline=?");
            $request->execute([$type, $alaune]);
            $result = $request->fetch();
            return $result;
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
