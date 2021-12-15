----
# 쿠킹가이드
계량 측정법, 요리하는 사람을 위한 정보(영양소 검색, 레시피찾기)를 알려주는 사이트 <br>

![image](https://user-images.githubusercontent.com/82712691/146155224-623ac7dc-594b-4b7c-816a-acf6f201af73.png) <br>

----

# 프로젝트 설명

>요리를 쉽고 간편하게 할 수 있게 하자는 의미로 이 프로젝트를 계획하게 되었다.<br>
>>사용한 방법 <br><br>
>>apache를 이용하여 홈페이지 DB 연동<br>
>>SQL을 활용한 데이터 정제 및 분석<br>
>>식품의 정보를 제공받기 위한 공공데이터 OpenAPI 활용<br>
![image](https://user-images.githubusercontent.com/82712691/146153551-4df2d2e8-3c9b-4a5d-8b33-f8c6adb1f2e2.png) <br>

----

## 홈페이지 흐름/결과

![image](https://user-images.githubusercontent.com/82712691/146153982-0518a671-e5f9-4d43-8279-99fecc4e390f.png) <br>

![image](https://user-images.githubusercontent.com/82712691/146154383-69c5c950-1a98-4cc3-b8e7-d147079f5a94.png) <br>

![image](https://user-images.githubusercontent.com/82712691/146154497-a3a1ab16-c138-4f58-a87e-b5b8c5a101c2.png) <br>

사용예시 1 <br>

![image](https://user-images.githubusercontent.com/82712691/146154584-427619f8-6356-42e1-b569-8ea0cdd62ce4.png)

사용예시 2 <br>

![image](https://user-images.githubusercontent.com/82712691/146154637-c2c9ab22-c68e-4f4a-a232-e0b695ef9f0c.png)

----

## DB 연동

![image](https://user-images.githubusercontent.com/82712691/146153705-466b5928-f498-44ca-a4ff-acfd399ccb09.png) <br>

![image](https://user-images.githubusercontent.com/82712691/146153744-a7693f0f-ec37-4661-8192-d791984d3703.png) <br>

cal 데이터의 구성은 나이, 성별에 따른 열량의 DB로 기본키는 age, gender의 복합기로 이루어져있고, <br>
회원가입에서 나이와 성별을 입력하면 그에 따른 권장칼로리를 알려준다. <br>

----
