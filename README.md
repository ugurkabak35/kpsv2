# kpsv2
https://kpsv2.nvi.gov.tr tarafından sunulan Kimlik Paylaşım Sistemi(Bileşik Kütük Bilgileri Sorgulama)

Kimlik Paylaşımı Sistemi web servislerinden faydalanabilmek için, bağlantı için kullandığınız sistemin aşağıdaki gereksinimleri sağlaması gerekmektedir.

XML Web Servislerini çağırabilme (SOAP 1.2)
WS-Security 1.1, WS-Trust 1.3 ve WS-SecurityPolicy 1.2 web servis güvenliği standartlarını desteklemesi gerekmektedir.
Yeni KPS’de tek noktadan kimlik doğrulama (Single Sign On – SSO) yöntemi uygulanmaktadır. Web servis kullanıcıları doğrudan KPS üzerinden değil, ayrı bir güvenlik anahtarı servisinden (Security Token Service – STS) kullanıcı adı ve parolaları ile anahtar alarak, geçerli olduğu süre zarfında aynı anahtar ile KPS’ye çağrıda bulunabileceklerdir.

STS, WS-Security - UsernameToken güvenlik yöntemini kullanmaktadır ve transport seviyesinde SSL (secure sockets layer) ile korunmaktadır. KPS V2 ise WS-Security 1.1, WS-Trust 1.3 ve WS-SecurityPolicy 1.2 güvenlik yöntemlerini uygulamaktadır. KPS V2 Servisleri transport serviyesinde SSL ile, SOAP serviyesinde SAML V1.1 güvenlik anahtarı ile korunmaktadır.

Kullanıcılar kendilerine verilen kullanıcı adı ve parolaları ile STS’nin sunduğu güvenlik anahtarı sağlayıcı servise istekte bulunurlar. STS servis cevabı olarak SAML V1.1 türünde bir güvenlik anahtarı döner. Kullanıcılar bu güvenlik anahtarı ile KPS servislerine istekte bulunabilirler.

KPSTeknikBilgi

STS’den alınan güvenlik anahtarı belirli bir süre boyunca geçerli olacaktır. Web servis istemcileri bir defa STS’den güvenlik anahtarını aldıktan sonra bu süre dolana kadar aynı anahtar ile doğrudan KPS servislerini çağırabilirler. Güvenlik Anahtarı, kendi geçerlilik süresi bilgisini içermektedir.

İşlem sağlamadan önce https://kpsbasvuru.nvi.gov.tr adresi üzerinden servise istek göndereceğiniz IP adresinizi tanımlatmanız gerekiyor. Tanımlama işlemini yaptıktan sonra kurum kodu ve şifre bilgisini girip işlem sağlayabilirsiniz.
