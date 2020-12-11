# bicycle
성신여자대학교 2020-2 데이터베이스프로그래밍 수업 팀1(t1) 기말과제

### 제작 동기
따릉이 이용시 

### 목표
구 별, 월 별, 시간대 별 따릉이 대여소의 자전거 포화, 부족 상태를 표시하여 
<br>따릉이 이용자들이 해당 정보를 참고해 따릉이 대여에 불편함이 없도록 한다.

### 제공 기능
- 각 구의 대여 반납 이용량을 시각화한 그래프 확인(한 달 기준)
- 각 구 별 자전거 포화 대여소 확인
- 각 구 별 자전거 부족 대여소 확인
- 입력한 자전거 대여소의 자전거 대수 포화/부족 상태 확인
- 입력한 자전거 대요소와 가장 가까운 자전거 정류소 추천

### 각 페이지 별 소개 및 이용방법
-  Index 페이지
자전거 포화,부족 확인 링크 연결

원하는 정류소, 시간 링크 연결 


![index](https://user-images.githubusercontent.com/70589857/101937312-0cbb7380-3c25-11eb-87ac-2aa6bd1722f4.PNG)



### 구축 환경
서버 : Ubuntu Server 20.04 LTS (HVM) - AWS EC2
<br>데이터베이스 : mariaDB
<br>

### 사용 데이터 및 출처
서울특별시에서 제공하는 '서울 열린데이터 광장' 사이트를 이용.

- 서울특별시 공공자전거 대여이력 정보
<br>https://data.seoul.go.kr/dataList/OA-15182/F/1/datasetView.do
- 공공자전거 대여소별 이용정보(월별) - 대여소별 대여 반납 정보
<br>https://data.seoul.go.kr/dataList/OA-15249/F/1/datasetView.do
- 공공자전거 대여소 정보
<br>https://data.seoul.go.kr/dataList/OA-13252/F/1/datasetView.do

### 역할분담
