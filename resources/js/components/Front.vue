<template>
              
              <tr align="center" style="background-color:skyblue;" v-for="app in appointments">
            <td style="padding:5px; font-size:20px; color:white;" id="app.name">{{app.name}}</td>
            <td style="padding:5px; font-size:20px; color:white;" id="app.email">{{app.email}}</td>
            <td style="padding:5px; font-size:20px; color:white;" id="app.phone">{{app.phone}}</td>
            <td style="padding:5px; font-size:20px; color:white;" id="app.doctor">{{app.doctor}}</td>
            <td style="padding:5px; font-size:20px; color:white;" id="app.date">{{app.date}}</td>
            <td style="padding:5px; font-size:20px; color:white;" id="app.timestart">{{app.timestart}}</td>
            <td style="padding:5px; font-size:20px; color:white;" id="app.message">{{app.message}}</td>
            
        </tr>





</template>



<script>
   
 export default {
        data: function () {
            return {
                appointments: []
            }
        },
        mounted() {
            this.loadAppointments();
        },
        methods: {
            loadAppointments: function () {
                axios.get('/api/appointments')
                    .then((response) => {
                        this.appointments = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
            
        }
    }
</script>