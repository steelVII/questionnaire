<template>


                <table class="table is-fullwidth is-hoverable is-narrow is-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Organization</th>
                            <th>Email</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                <tbody>
                            <tr v-for="item in questionnaire" :key="item.id">
                            <td>{{ item.name }}</td>
                            <td>{{ item.organization }}</td>
                            <td>{{ item.email }}</td>
                            <td>{{ item.created_at }}</td>
                        </tr>
                </tbody>
        </table>
</template>

<script>
export default {
  props: ["questionnaire"]
};
</script>
