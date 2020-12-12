# bicycle
성신여자대학교 2020-2 데이터베이스프로그래밍 수업 팀1(t1) 기말과제

### 제작 동기
따릉이 이용시 

### 목표
구 별, 월 별, 시간대 별 따릉이 대여소의 자전거 포화, 부족 상태를 표시하여 
<br>따릉이 이용자들이 해당 정보를 참고해 따릉이 대여에 불편함이 없도록 한다.

### 제공 기능
- 각 구의 대여 반납 이용량을 시각화한 그래프 확인(한 달 기준)
- 각 구별 자전거 포화 대여소 확인
- 각 구별 자전거 부족 대여소 확인
- 입력한 자전거 대여소의 자전거 대수 포화/부족 상태 확인
- 입력한 자전거 대여소와 가장 가까운 자전거 대여소 추천

### 각 페이지 별 소개 및 이용방법
##### 1. Index 페이지
   - 자전거 포화,부족 확인 링크 연결
   - 원하는 대여소, 시간 링크 연결 
![index](width="400" https://user-images.githubusercontent.com/70589857/101937312-0cbb7380-3c25-11eb-87ac-2aa6bd1722f4.PNG)


##### 2. 자전거 포화/부족 상태 확인과 구별 자전거 대여, 반납 비교 그래프
   - 전체 정류소의 자전거 포화/부족 상태 확인
   - 구를 입력하면 원하는 구의 포화/부족 상태 확인 가능
   <img width="400" alt="exceed" src="https://user-images.githubusercontent.com/70560199/101939637-9caeec80-3c28-11eb-9250-c2583740bfdc.PNG">
   <img width="400" alt="exceed_gu" src="https://user-images.githubusercontent.com/70560199/101938956-9ff5a880-3c27-11eb-9c83-1b02a0d48d7c.PNG">
   <img width="400" alt="shortage" src="https://user-images.githubusercontent.com/70560199/101938977-a6842000-3c27-11eb-8f06-b9c5e642f370.PNG">
   <img width="400" alt="shortage_gu" src="https://user-images.githubusercontent.com/70560199/101938982-a8e67a00-3c27-11eb-87f0-750da8c2e731.PNG">
   
   - 각 구별로 자전거 대여, 반납 개수를 한 눈에 쉽게 비교하기 위하여 막대 그래프로 표현
   <img width="767" alt="graph" src="https://user-images.githubusercontent.com/70560199/101939041-c0bdfe00-3c27-11eb-80a0-fa05a8415464.PNG">


##### 3. 시간대별 대여소의 자전거 포화, 부족 상태확인 및 가까운 대여소 추천 페이지
   - 원하는 시간대를 한 시간 단위로 선택
  <img width="400" src="https://user-images.githubusercontent.com/70560199/101939637-9caeec80-3c28-11eb-9250-c2583740bfdc.PNG">
  
   - 원하는 대여소의 대여소 번호를 입력
   <img width="400" src="https://user-images.githubusercontent.com/70579136/101970441-ba527500-3c6d-11eb-843a-e257ce613e30.PNG">
   
   - 모든 항목을 입력하고 go 버튼을 클릭
   <img width="400" src="https://user-images.githubusercontent.com/70579136/101970464-e79f2300-3c6d-11eb-8dcf-7a1a6048d171.PNG">
   1) 선택한 시간대 확인<br>
   2) 입력한 대여소의 대여소 명 확인<br>
   3) 입력한 대여소의 자전거 포화, 부족 상태 확인<br>
   4) 입력한 대여소와 일정 거리 내에 있는 대여소가 가장 가까운 곳부터 출력<br>
   5) 클릭 시 index.php 페이지로 이동

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
